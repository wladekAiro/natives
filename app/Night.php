<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Night extends Model {

	//
    protected $table = 'theme_nights';
    protected $fillable = ['name' , 'date' , 'description' , 'picture'];

}
