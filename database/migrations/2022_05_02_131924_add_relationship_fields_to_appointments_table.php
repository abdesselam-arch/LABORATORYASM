<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id', 'client_fk_6525065')->references('id')->on('clients');
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id', 'admin_fk_6525066')->references('id')->on('users');
        });
    }
}