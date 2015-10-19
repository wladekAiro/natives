<?php namespace App\Http\Controllers;

use App\Envent;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EventsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
     *
     * upcoming and past events
	 */
	public function index()
	{
		//
		$events = Envent::all();
		return view('Event.index', compact('events'));
	}

	public function allEvents()
	{
		//
		$events = Envent::all();
		return view('Event.allEvents', compact('events'));
	}


	public function show($id)
	{
		//
		$event = Envent::find($id);

		return view('Event.show' , compact('event'));
	}

}
