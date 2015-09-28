<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventDjsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_djs', function(Blueprint $table)
		{
			$table->integer('event_id')->unsigned();
            $table->integer('dj_id')->unsigned();
			
			$table->foreign('event_id')->references('id')->on('envents');
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
		Schema::drop('event_djs');
	}

}
