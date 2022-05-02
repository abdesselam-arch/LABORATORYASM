<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTestPivotTable extends Migration
{
    public function up()
    {
        Schema::create('appointment_test', function (Blueprint $table) {
            $table->unsignedBigInteger('appointment_id');
            $table->foreign('appointment_id', 'appointment_id_fk_6525070')->references('id')->on('appointments')->onDelete('cascade');
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id', 'test_id_fk_6525070')->references('id')->on('tests')->onDelete('cascade');
        });
    }
}