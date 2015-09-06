<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hosts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('name')->unique();
            $table->string('description');
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
		Schema::drop('hosts');
	}

}
