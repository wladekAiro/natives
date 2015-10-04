<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventSponsorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_sponsors', function(Blueprint $table)
		{
			$table->timestamps();
			$table->integer('event_id')->unsigned();
            $table->integer('sponsor_id')->unsigned();
			
			$table->foreign('event_id')->references('id')->on('envents');
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
		Schema::drop('event_sponsors');
	}

}
