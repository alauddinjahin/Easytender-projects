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
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreign('client_id')->references('id')->on('users')->restrictOnDelete();
            $table->foreignId('freelancr_id');
            $table->foreign('freelancr_id')->references('id')->on('users')->restrictOnDelete();
            $table->foreignId('tender_id');
            $table->foreign('tender_id')->references('id')->on('tenders')->restrictOnDelete();
            $table->boolean('is_approve');
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
        Schema::dropIfExists('bids');
    }
};
