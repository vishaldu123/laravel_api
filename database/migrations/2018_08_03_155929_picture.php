<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Picture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('picture', function (Blueprint $table) {
            $table->increments('pic_id');
            $table->string('url',930);
			$table-> unsignedInteger ('emp_id')->foreign('emp_id')
            ->references('emp_id')->on('employee')
            ->onDelete('cascade');
            $table->timestamps();       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('picture');
    
    }
}
