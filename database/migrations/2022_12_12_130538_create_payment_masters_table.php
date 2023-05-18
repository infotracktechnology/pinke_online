<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_masters', function (Blueprint $table) {
            $table->id();
            $table->string('Payment_Status');
            $table->string('order_id');
            $table->string('Payment_ID');
            $table->string('Paid_Amount');
            $table->string('c_id');
            $table->string('receipt');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('PaymentGateWayName');
            $table->string('ResponseString');
            $table->date('adate');
            $table->time('atime');
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
        Schema::dropIfExists('payment_masters');
    }
}
