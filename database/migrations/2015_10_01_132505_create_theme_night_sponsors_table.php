<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeNightSponsorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('theme_night_sponsors', function(Blueprint $table)
		{
			$table->timestamps();
			
			$table->integer('theme_night_id')->unsigned();
            $table->integer('sponsor_id')->unsigned();

            $table->foreign('theme_night_id')->references('id')->on('theme_nights');
            $table->foreign('sponsor_id')->references('id')->on('sponsors');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('theme_night_sponsors');
	}

}
