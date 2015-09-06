<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThemeNightHost extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('theme_night_host', function(Blueprint $table)
        {
            $table->integer('theme_night_id')->unsigned();
            $table->integer('host_id')->unsigned();

            $table->foreign('theme_night_id')->references('id')->on('theme_nights');
            $table->foreign('host_id')->references('id')->on('hosts');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('theme_night_host');
	}

}
