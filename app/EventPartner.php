<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPartner extends Model {

	//
	protected $table = 'event_partners';
    protected $fillable = ['event_id' , 'partner_id'];

}
