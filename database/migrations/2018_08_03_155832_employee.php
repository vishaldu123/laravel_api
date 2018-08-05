<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('employee', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->string('firstname',30);
            $table->string('lastname',30);
            $table->string('email',50)->unique();
            $table->string('phone',20)->nullable();
            $table->timestamps();       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee');
    }
}
