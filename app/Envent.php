<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Envent extends Model {

	//
    protected $table = 'envents';
    protected $fillable = ['name' , 'date' , 'description' , 'picture'];

}
