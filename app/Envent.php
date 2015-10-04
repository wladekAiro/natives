<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Envent extends Model {

	//
    protected $table = 'envents';
    protected $fillable = ['name' , 'date' , 'description' , 'picture'];

    public function djs(){
        return $this -> belongsToMany('App\Dj' ,'event_djs' , 'event_id' , 'dj_id');
    }
	
	public function partner(){
	     return $this -> belongsToMany('App\Partner' , 'event_partners' , 'event_id' , 'partner_id');
	}
	
	public function sponsor(){
	     return $this -> belongsToMany('App\Sponsor' , 'event_sponsors' , 'event_id' , 'sponsor_id');
	}
}
