<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model {

	//
    protected $table = ['sponsors'];
    protected $fillable = ['name' , 'description' , 'picture'];

    public function themeNight(){
        return $this -> belongsToMany('ThemeNight');
    }
}
