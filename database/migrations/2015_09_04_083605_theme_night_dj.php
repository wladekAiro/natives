<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThemeNightDj extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('theme_night_dj', function(Blueprint $table)
        {
            $table->integer('theme_night_id')->unsigned();
            $table->integer('dj_id')->unsigned();

            $table->foreign('theme_night_id')->references('id')->on('theme_nights');
            $table->foreign('dj_id')->references('id')->on('djs');
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
        Schema::drop('theme_night_dj');
	}

}
