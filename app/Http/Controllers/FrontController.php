<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

    public function findUs(){
        return view('find_us');
    }

    public function contactUsForm(){
        return view('contact_us');
    }
}
