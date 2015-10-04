<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventPartnersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_partners', function(Blueprint $table)
		{
			$table->timestamps();
			$table->integer('event_id')->unsigned();
            $table->integer('partner_id')->unsigned();
			
			$table->foreign('event_id')->references('id')->on('envents');
            $table->foreign('partner_id')->references('id')->on('partners');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event_partners');
	}

}
