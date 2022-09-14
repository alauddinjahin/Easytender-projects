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
        Schema::create('tender_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tender_id');
            $table->foreign('tender_id')->references('id')->on('tenders')->restrictOnDelete();
            $table->string('batch_id');
            $table->string('vat_id');
            $table->double('service_charge');
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
        Schema::dropIfExists('tender_items');
    }
};
