<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Envent extends Model {

	//
    protected $table = 'envents';
    protected $fillable = ['name' , 'date' , 'description' , 'picture'];

    public function djs(){
        return $this -> belongsToMany('App\Dj' ,'event_djs' , 'event_id' , 'dj_id');
    }
}
