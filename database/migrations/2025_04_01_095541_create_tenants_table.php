<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('company_name');
            $table->string('slug')->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->enum('subscription_plan', ['free', 'pro', 'business'])->default('free');
            $table->enum('subscription_status', ['active', 'canceled', 'expired', 'pending_payment'])->default('active');
            $table->timestamp('subscription_ends_at')->nullable();
            $table->json('settings')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenants');
    }
};
