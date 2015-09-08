<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeNightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('theme_nights', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('name') -> uniques();
            $table->text('description');
            $table->date('date');
            $table->string('picture');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('theme_nights');
	}

}
