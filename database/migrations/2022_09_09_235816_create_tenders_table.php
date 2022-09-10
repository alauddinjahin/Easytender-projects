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
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->integer('batch_id');
            $table->bigInteger('vat_id');
            $table->string('tender_method_id')->nullable();
            $table->string('tender_method');
            $table->dateTime('last_selling_date');
            $table->double('service_charge');
            $table->double('total_charge')->nullable();
            $table->string('status');
            $table->integer('created_by');
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
        Schema::dropIfExists('tenders');
    }
};
