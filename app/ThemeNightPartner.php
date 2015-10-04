<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ThemeNightPartner extends Model {

	//
       protected $table = 'theme_night_partners';
       protected $fillable = ['theme_night_id', 'partner_id'];
}
