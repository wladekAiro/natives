<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EventDj extends Model {

	//
    protected $table = 'event_djs';
    protected $fillable = ['event_id' , 'dj_id'];

}
