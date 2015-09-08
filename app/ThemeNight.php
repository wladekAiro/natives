<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ThemeNight extends Model {

	//
    protected $table = 'theme_nights';
    protected $fillable = ['name', 'description' ,'date','picture'];

    public function host(){
        return $this->hasMany('Host')->through('ThemeNightHost');
    }

    public function partner(){
        return $this->hasManyThrough('Partner' , 'ThemeNightPartner');
    }

    public function sponsor(){
        return $this->hasManyThrough('Sponsor' , 'ThemeNightSponsor');
    }

    public function dj(){
        return $this->hasManyThrough('Dj' , 'ThemeNightDj');
    }

}
