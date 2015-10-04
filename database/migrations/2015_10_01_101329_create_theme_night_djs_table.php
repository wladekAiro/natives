<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeNightDjsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('theme_night_djs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			
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
		Schema::drop('theme_night_djs');
	}

}
