<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model {

	//
    protected $table = 'partners';
    protected $fillable = ['name' , 'description' , 'picture'];


    public function themeNight(){
        return $this -> belongsToMany('ThemeNight');
    }
}
