<?php namespace App\Http\Controllers;

use App\Dj;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminDjController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $djs = Dj::orderBy('id', 'asc')->simplePaginate(1);
        return view('Dj/Admin/home' , compact('djs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('Dj/Admin/form');
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

            $dj = new Dj();
            $dj ->name =  Input::get('name');
            $dj ->description = Input::get('description');
            $dj -> picture = '/'.$filename;
            $dj->save();

        }

        return Redirect::to('admin/dj/home');
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
        $dj = Dj::find($id);
        return view('Dj/Admin/show' , compact('dj'));
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
        $dj = Dj::find($id);
        return view('Dj/Admin/editForm' , compact('dj' , 'id'));
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

            $dj = Dj::find($id);
            $dj ->name =  Input::get('name');
            $dj ->description = Input::get('description');
            $dj -> picture = '/'.$filename;
            $dj->save();

        }

        return Response::to('admin/dj/home');
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
        Dj::destroy($id);
        return Redirect::to('admin/dj/home');
    }

}
