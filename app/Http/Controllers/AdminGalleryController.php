<?php namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminGalleryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$gallery = Gallery::all();
		return view('Gallery/Admin/home', compact('gallery'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('Gallery/Admin/form');
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

			$gallery = new Gallery();
			$gallery ->name =  Input::get('name');
			$gallery ->date = Input::get('date');
			$gallery ->description = Input::get('description');
			$gallery -> picture = '/'.$filename;

//     		if (Gallery::where('name', '=', Input::get('name'))->count() > 0){
//
//				return redirect()->route('form')->with('message', 'Gallery Already Exist!');
//			}
//			else{
				$gallery->save();
				return Redirect::to('admin/gallery/home')->with('message', 'Gallery Successfully added!');
//			}
	}
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
		$gallery = Gallery::find($id);
		return view('Gallery/Admin/show' , compact('gallery'));
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
		$gallery = Gallery::find($id);
		return view('Gallery/Admin/editForm' , compact('gallery' , 'id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();

		$filename = null;

		if (Input::file('picture')->isValid()) {



			$destinationPath = public_path() . "/images/assets"; // upload path
			$extension = Input::file('picture')->getClientOriginalExtension(); // getting image extension
			$filename = "images/assets/" . rand(00000, 99999) . '.' . $extension; // renameing image

			Input::file('picture')->move($destinationPath, $filename);

			$gallery = Gallery::find($id);
			$gallery ->name =  Input::get('name');
			$gallery ->date = Input::get('date');
			$gallery ->description = Input::get('description');
			$gallery -> picture = '/'.$filename;
			$gallery->save();

		}

		return Redirect::to('admin/gallery/home')->with('message', 'Gallery successfully updated');
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
		Gallery::destroy($id);
		return Redirect::to('admin/gallery/home')->with('message', 'Gallery Successfully deleted!');
	}

}