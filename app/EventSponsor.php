<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EventSponsor extends Model {

	//
	protected $table = 'event_sponsors';
    protected $fillable = ['event_id' , 'sponsor_id'];

}
