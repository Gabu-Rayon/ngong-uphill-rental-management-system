<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained(); // Assuming you have a 'tenants' table
            $table->double('amount', 8, 2);
            $table->string('name');
            $table->string('email');
            $table->string('house_no');
            $table->string('category');
            $table->string('payment_method');
            $table->string('credit_account_code')->nullable();
            $table->string('mpesa_account_code')->nullable();
            $table->string('bank_account_code')->nullable();
            $table->string('card_holder_name')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('cvv')->nullable();
            $table->string('visa_last_three_digits')->nullable();
            $table->string('invoice');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}