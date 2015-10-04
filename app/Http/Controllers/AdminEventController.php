<?php namespace App\Http\Controllers;

use App\Envent;
use App\EventDj;
use App\Dj;
use App\Partner;
use App\Sponsor;
use App\EventPartner;
use App\EventSponsor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminEventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $events = Envent::orderBy('date', 'desc')->simplePaginate(5);
        return view('Events.Admin.home', compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return view('Events.Admin.form');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $input = Input::all();

        $filename = null;

        if (Input::file('picture')->isValid()) {



            $destinationPath = public_path() . "/images/assets"; // upload path
            $extension = Input::file('picture')->getClientOriginalExtension(); // getting image extension
            $filename = "images/assets/" . rand(00000, 99999) . '.' . $extension; // renameing image

            Input::file('picture')->move($destinationPath, $filename);

            $event = new Envent();
            $event ->name =  Input::get('name');
            $event ->date = Input::get('date');
            $event ->description = Input::get('description');
            $event -> picture = '/'.$filename;
            $event->save();

        }

        return Redirect::to('admin/event/home');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
        $event = Envent::find($id);
        return view('Events/Admin/show' , compact('event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
        $event = Envent::find($id);
        return view('Events/Admin/editForm' , compact('event' , 'id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
        $input = Input::all();

        $filename = null;

        if (Input::file('picture')->isValid()) {



            $destinationPath = public_path() . "/images/assets"; // upload path
            $extension = Input::file('picture')->getClientOriginalExtension(); // getting image extension
            $filename = "images/assets/" . rand(00000, 99999) . '.' . $extension; // renameing image

            Input::file('picture')->move($destinationPath, $filename);

            $event = Envent::find($id);
            $event ->name =  Input::get('name');
            $event ->date = Input::get('date');
            $event ->description = Input::get('description');
            $event -> picture = '/'.$filename;
            $event->save();

        }

        return Redirect::to('admin/event/home');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
        Envent::destroy($id);
        return Redirect::to('admin/event/home');
	}
	
	public function assignDjForm($id){
	
	   //
       $event = Envent::find($id);
	   $djs = Dj::all();
       return view('Events/Admin/assignDjForm' , compact('event' , 'djs'));
	}
	public function assignDj(){
	
	   //
       $eventDjId = Input::get('eventDjId');
	   $eventId = Input::get('eventId');
	   
	   $eventDj = new EventDj();
	   
	   $eventDj -> event_id = $eventId;
	   $eventDj -> dj_id = $eventDjId;
	   $eventDj -> save();
	   
	   return redirect()->route('more', $eventId)->with('message', 'Dj assigned Successfully');
	   
	}
	
	public function addPartnerForm($id){
	
	   //
       $event = Envent::find($id);
	   $partners = Partner::all();
       return view('Events/Admin/addPartnerForm' , compact('event' , 'partners'));
	}
	
	public function addPartner(){
	
	   //
       $eventPartnerId = Input::get('eventPartnerId');
	   $eventId = Input::get('eventId');
	   
	   $eventPartner = new EventPartner();
	   
	   $eventPartner -> event_id = $eventId;
	   $eventPartner -> partner_id = $eventPartnerId;
	   $eventPartner -> save();
	   
	   return redirect()->route('more', $eventId)->with('message', 'Partner added Successfully');
	   
	}
    
	 public function addSponsorForm($id){
	
	   //
       $event = Envent::find($id);
	   $sponsors = Sponsor::all();
       return view('Events/Admin/addSponsorForm' , compact('event' , 'sponsors'));
	}
	
	public function addSponsor(){
	
	   //
       $eventSponsorId = Input::get('eventSponsorId');
	   $eventId = Input::get('eventId');
	   
	   $eventSponsor = new EventSponsor();
	   
	   $eventSponsor -> event_id = $eventId;
	   $eventSponsor -> sponsor_id = $eventSponsorId;
	   $eventSponsor -> save();
	   
	   return redirect()->route('more', $eventId)->with('message', 'Sponsor Successfully');
	   
	}
}
