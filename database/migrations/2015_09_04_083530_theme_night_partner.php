<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThemeNightPartner extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('theme_night_partner', function(Blueprint $table)
        {
            $table->integer('theme_night_id')->unsigned();
            $table->integer('partner_id')->unsigned();

            $table->foreign('theme_night_id')->references('id')->on('theme_nights');
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
		//
        Schema::drop('theme_night_partner');
	}

}
