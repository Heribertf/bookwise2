<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Appointment;
use App\Services\MpesaService;

class PaymentController extends Controller
{
    protected $mpesaService;

    public function __construct(MpesaService $mpesaService)
    {
        $this->mpesaService = $mpesaService;
    }

    /**
     * Initiate M-Pesa payment
     */
    public function initiateMpesa(Request $request)
    {
        $request->validate([
            'appointment_id' => 'required|exists:appointments,id',
            'phone' => 'required|string'
        ]);

        $appointment = Appointment::findOrFail($request->appointment_id);

        // Verify appointment belongs to current user or tenant
        if (auth()->user()->role === 'client' && $appointment->client_id !== auth()->id()) {
            abort(403);
        }

        if ($appointment->payment && $appointment->payment->status === 'completed') {
            return back()->with('error', 'Payment already completed');
        }

        try {
            $response = $this->mpesaService->stkPush(
                $request->phone,
                $appointment->service->price,
                $appointment->id,
                "Payment for {$appointment->service->name}"
            );

            // Create or update payment record
            Transaction::updateOrCreate(
                ['appointment_id' => $appointment->id],
                [
                    'tenant_id' => $appointment->tenant_id,
                    'amount' => $appointment->service->price,
                    'currency' => $appointment->service->currency,
                    'payment_method' => 'mpesa',
                    'transaction_id' => $response['MerchantRequestID'],
                    'status' => 'pending',
                    'payment_data' => $response
                ]
            );

            return back()->with('success', 'Payment request sent to your phone');
        } catch (\Exception $e) {
            return back()->with('error', 'Payment failed: ' . $e->getMessage());
        }
    }

    /**
     * Handle M-Pesa callback
     */
    public function mpesaCallback(Request $request)
    {
        try {
            $result = json_decode($request->getContent(), true);

            if (!isset($result['Body']['stkCallback'])) {
                throw new \Exception('Invalid callback format');
            }

            $callback = $result['Body']['stkCallback'];
            $merchantRequestId = $callback['MerchantRequestID'];
            $resultCode = $callback['ResultCode'];

            $payment = Transaction::where('transaction_id', $merchantRequestId)->firstOrFail();
            $appointment = $payment->appointment;

            if ($resultCode == 0) {
                // Successful payment
                $metadata = $callback['CallbackMetadata']['Item'];

                $payment->update([
                    'status' => 'completed',
                    'mpesa_receipt_number' => $metadata[1]['Value'] ?? null,
                    'phone_number' => $metadata[4]['Value'] ?? null,
                    'payment_data' => array_merge($payment->payment_data ?? [], ['callback' => $callback])
                ]);

                // Confirm the appointment
                $appointment->confirm();
            } else {
                // Failed payment
                $payment->update([
                    'status' => 'failed',
                    'payment_data' => array_merge($payment->payment_data ?? [], ['callback' => $callback])
                ]);
            }

            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            \Log::error('MPesa Callback Error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}