<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminPartnersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $partners = Partner::orderBy('id', 'asc')->simplePaginate(1);
        return view('Partners/Admin/home' , compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('Partners/Admin/form');
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

            $partner = new Partner();
            $partner ->name =  Input::get('name');
            $partner ->description = Input::get('description');
            $partner -> picture = '/'.$filename;
            $partner->save();

        }

        return Redirect::to('admin/partner/home');
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
        $partner = Partner::find($id);
        return view('Partners/Admin/show' , compact('partner'));
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
        $partner = Partner::find($id);
        return view('Partners/Admin/editForm' , compact('partner' , 'id'));
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

            $partner = Partner::find($id);
            $partner ->name =  Input::get('name');
            $partner ->description = Input::get('description');
            $partner -> picture = '/'.$filename;
            $partner->save();

        }

        return Redirect::to('admin/partner/home');
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
        Partner::destroy($id);
        return Redirect::to('admin/partner/home');
    }

}
