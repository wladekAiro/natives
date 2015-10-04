<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model {

	//
    protected $table = 'sponsors';
    protected $fillable = ['name' , 'description' , 'picture'];

    public function themeNight(){
        return $this -> beloToMany('App\ThemeNight', 'theme_night_sponsors', 'theme_night_id', 'sponsor_id');
    }
	
	public function event(){
	   return $this -> belongsToMany('App\Envent' , 'event_sponsors' , 'event_id' , 'sponsor_id');
	}
}
