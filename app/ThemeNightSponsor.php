<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ThemeNightSponsor extends Model {

	//
     protected $table = 'theme_night_sponsors';
	 protected $fillable = ['theme_night_id', 'sponsor_id'];
}
