<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeedataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeedata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Address');
            $table->string('PhoneNumber');
            $table->string('Email');
            $table->string('CompanyName');
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
        Schema::dropIfExists('employeedata');
    }
}
