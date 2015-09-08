<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model {

	//
    protected $table = 'hosts';
    protected $fillable = ['name' , 'description' , 'picture'];

    public function themeNight(){
        return $this -> belongsToMany('ThemeNight');
    }
}
