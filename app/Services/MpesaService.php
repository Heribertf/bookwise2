<?php

namespace App\Services;

use App\Models\Transaction;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MpesaService
{
    protected $consumerKey;
    protected $consumerSecret;
    protected $passkey;
    protected $businessShortCode;
    protected $callbackUrl;
    protected $environment;

    public function __construct()
    {
        $this->consumerKey = config('services.mpesa.consumer_key');
        $this->consumerSecret = config('services.mpesa.consumer_secret');
        $this->passkey = config('services.mpesa.passkey');
        $this->businessShortCode = config('services.mpesa.business_short_code');
        $this->callbackUrl = config('services.mpesa.callback_url');
        $this->environment = config('services.mpesa.env');
    }

    /**
     * Generate access token for M-Pesa API
     */
    public function generateAccessToken()
    {
        try {
            $url = $this->getBaseUrl() . '/oauth/v1/generate?grant_type=client_credentials';

            $response = Http::withBasicAuth($this->consumerKey, $this->consumerSecret)
                ->get($url);

            if ($response->successful()) {
                return $response->json()['access_token'];
            }

            throw new \Exception('Failed to generate access token: ' . $response->body());
        } catch (\Exception $e) {
            Log::error('MPesa Access Token Error: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Initiate STK Push payment request
     */
    public function stkPush($phone, $amount, $reference, $description)
    {
        try {
            $token = $this->generateAccessToken();
            $url = $this->getBaseUrl() . '/mpesa/stkpush/v1/processrequest';

            $timestamp = date('YmdHis');
            $password = base64_encode($this->businessShortCode . $this->passkey . $timestamp);

            $phone = $this->formatPhoneNumber($phone);
            $amount = number_format($amount, 2, '.', '');

            $payload = [
                'BusinessShortCode' => $this->businessShortCode,
                'Password' => $password,
                'Timestamp' => $timestamp,
                'TransactionType' => 'CustomerPayBillOnline',
                'Amount' => $amount,
                'PartyA' => $phone,
                'PartyB' => $this->businessShortCode,
                'PhoneNumber' => $phone,
                'CallBackURL' => $this->callbackUrl,
                'AccountReference' => $reference,
                'TransactionDesc' => $description
            ];

            $response = Http::withToken($token)
                ->withHeaders(['Content-Type' => 'application/json'])
                ->post($url, $payload);

            if ($response->successful()) {
                return $response->json();
            }

            throw new \Exception('STK Push failed: ' . $response->body());
        } catch (\Exception $e) {
            Log::error('MPesa STK Push Error: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Handle M-Pesa callback
     */
    public function handleCallback($callbackData)
    {
        try {
            $result = json_decode($callbackData, true);

            if (!isset($result['Body']['stkCallback'])) {
                throw new \Exception('Invalid callback format');
            }

            $callback = $result['Body']['stkCallback'];
            $merchantRequestId = $callback['MerchantRequestID'];
            $checkoutRequestId = $callback['CheckoutRequestID'];
            $resultCode = $callback['ResultCode'];
            $resultDesc = $callback['ResultDesc'];

            // Find the payment record
            $payment = Transaction::where('transaction_id', $merchantRequestId)->first();

            if (!$payment) {
                throw new \Exception('Payment record not found');
            }

            if ($resultCode == 0) {
                // Success - update payment status
                $callbackMetadata = $callback['CallbackMetadata']['Item'];

                $data = [
                    'status' => 'completed',
                    'payment_data' => $callback,
                    'mpesa_receipt_number' => $callbackMetadata[1]['Value'] ?? null,
                    'transaction_date' => $callbackMetadata[3]['Value'] ?? null,
                    'phone_number' => $callbackMetadata[4]['Value'] ?? null
                ];

                $payment->update($data);

                // Confirm the appointment
                if ($payment->appointment) {
                    $payment->appointment->confirm();
                }

                return true;
            } else {
                // Failed - update payment status
                $payment->update([
                    'status' => 'failed',
                    'payment_data' => $callback
                ]);

                return false;
            }
        } catch (\Exception $e) {
            Log::error('MPesa Callback Error: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Format phone number for M-Pesa (2547...)
     */
    protected function formatPhoneNumber($phone)
    {
        $phone = preg_replace('/[^0-9]/', '', $phone);

        if (strlen($phone) === 9 && substr($phone, 0, 1) === '7') {
            return '254' . $phone;
        } elseif (strlen($phone) === 10 && substr($phone, 0, 1) === '0') {
            return '254' . substr($phone, 1);
        }

        return $phone;
    }

    /**
     * Get base URL based on environment
     */
    protected function getBaseUrl()
    {
        return $this->environment === 'production'
            ? 'https://api.safaricom.co.ke'
            : 'https://sandbox.safaricom.co.ke';
    }
}