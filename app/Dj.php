<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Dj extends Model {

	//
    protected $table = 'djs';
    protected $fillable = ['name' , 'description' , 'picture'];

    public function themeNight(){
        return $this -> belongsToMany('App\ThemeNight', 'theme_night_djs', 'theme_night_id', 'dj_id');
    }
	
	public function event(){
	   return $this -> belongsToMany('App\Envent' , 'event_djs' , 'event_id' , 'dj_id');
	}
}
