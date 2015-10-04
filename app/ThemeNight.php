<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ThemeNight extends Model {

	//
    protected $table = 'theme_nights';
    protected $fillable = ['name', 'description' ,'date','picture'];
	
	 public function djs(){
        return $this -> belongsToMany('App\Dj' ,'theme_night_djs' , 'theme_night_id' , 'dj_id');
    }
	
	public function partners(){
	     return $this -> belongsToMany('App\Partner', 'theme_night_partners', 'theme_night_id', 'partner_id');
	}
	
	public function sponsors(){
	     return $this -> belongsToMany('App\Sponsor', 'theme_night_sponsors', 'theme_night_id', 'sponsor_id');
	}


}
