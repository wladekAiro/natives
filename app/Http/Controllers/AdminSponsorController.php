<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminSponsorController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $sponsors = Sponsor::all();
        return view('Sponsors/Admin/home' , compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('Sponsors/Admin/form');
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

            $sponsor = new Sponsor();
            $sponsor ->name =  Input::get('name');
            $sponsor ->description = Input::get('description');
            $sponsor -> picture = '/'.$filename;
            $sponsor->save();

        }

        return Redirect::to('admin/sponsor/home');
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
        $sponsor = Sponsor::find($id);
        return view('Sponsors/Admin/show' , compact('sponsor'));
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
        $sponsor = Sponsor::find($id);
        return view('Sponsors/Admin/editForm' , compact('sponsor' , 'id'));
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

            $sponsor = Sponsor::find($id);
            $sponsor ->name =  Input::get('name');
            $sponsor ->description = Input::get('description');
            $sponsor -> picture = '/'.$filename;
            $sponsor->save();

        }

        return Redirect::to('admin/sponsor/home');
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
        Sponsor::destroy($id);
        return Redirect::to('admin/sponsor/home');
    }

}
