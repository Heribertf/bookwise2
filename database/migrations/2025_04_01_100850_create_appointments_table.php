<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('tenant_id')->nullable();
            $table->uuid('client_id')->nullable();
            $table->uuid('staff_id')->nullable();
            $table->uuid('service_id')->nullable();
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('mpesa_receipt')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            // Add index for faster lookups by date range
            $table->index(['tenant_id', 'start_time', 'end_time']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};