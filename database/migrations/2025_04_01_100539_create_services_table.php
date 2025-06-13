<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('tenant_id')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('duration')->comment('in minutes');
            $table->decimal('price', 10, 2);
            $table->string('currency')->default('KES');
            $table->integer('buffer_time')->default(0)->comment('in minutes');
            $table->integer('max_bookings_per_slot')->default(1);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
};
