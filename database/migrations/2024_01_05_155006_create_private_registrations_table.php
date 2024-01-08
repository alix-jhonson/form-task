<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('private_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('contactFirstName')->nullable();
            $table->string('contactLastName')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('customerID')->nullable();
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('deliveryMethod')->nullable();
            $table->string('ublVoice')->nullable();
            $table->string('attnForInvoices')->nullable();
            $table->string('emailForInvoice')->nullable();
            $table->string('sendingQuotes')->nullable();
            $table->string('iban')->nullable();
            $table->string('accountName')->nullable();
            $table->string('invoicesWorkflow')->nullable();
            $table->string('quotesWorkflow')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('private_registrations');
    }
};
