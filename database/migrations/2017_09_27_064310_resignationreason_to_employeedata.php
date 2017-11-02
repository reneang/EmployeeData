<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResignationreasonToEmployeedata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employeedata', function (Blueprint $table) {
            $table->string('ResignatationReason');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employeedata', function (Blueprint $table) {
            $table->dropColumn('ResignationReason');
        });
    }
}
