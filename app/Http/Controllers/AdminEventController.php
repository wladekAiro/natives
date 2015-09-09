<?php namespace App\Http\Controllers;

use App\Envent;
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
        $events = Envent::all();
        return view('Events.Admin.home' , compact('events'));
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

}
