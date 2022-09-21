<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->foreignId('tender_id');
            $table->foreign('tender_id')->references('id')->on('tenders')->restrictOnDelete();
            $table->foreignId('payment_by');
            $table->foreign('payment_by')->references('id')->on('users')->restrictOnDelete();
            $table->foreignId('payment_to');
            $table->foreign('payment_to')->references('id')->on('users')->restrictOnDelete();
            $table->foreignId('freelancer_id');
            $table->foreign('freelancer_id')->references('id')->on('users')->restrictOnDelete();
            $table->string('payment-method');
            $table->string('transation_id');
            $table->double('amount')->default(0);
            $table->string('currency');
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
};
