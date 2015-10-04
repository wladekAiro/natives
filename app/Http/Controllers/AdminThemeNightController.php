<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ThemeNight;
use App\Dj;
use App\Partner;
use App\Sponsor;
use App\themeNightDj;
use App\ThemeNightPartner;
use App\ThemeNightSponsor;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminThemeNightController extends Controller {

	/**
	 * Display a listing of the resource.
     * Handle Theme nights on admin side
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $themeNights = ThemeNight::orderBy('id', 'asc')->simplePaginate(5);
        return view('ThemeNight.Admin.home' , compact('themeNights'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return view('ThemeNight.Admin.form');
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
        $rules = array('picture' => 'required', 'name' => 'required', 'description' => 'required');

        $themeNightFeatures = array('image' => Input::file('picture'),'name'=> $input['name'],
            'description'=>$input['description']);

            $filename = null;

            if (Input::file('picture')->isValid()) {



                $destinationPath = public_path() . "/images/assets"; // upload path
                $extension = Input::file('picture')->getClientOriginalExtension(); // getting image extension
                $filename = "images/assets/" . rand(00000, 99999) . '.' . $extension; // renameing image

                Input::file('picture')->move($destinationPath, $filename);

                $themeNight = new ThemeNight();
                $themeNight ->name =  Input::get('name');
                $themeNight ->description = Input::get('description');
                $themeNight -> picture = '/'.$filename;
                $themeNight->save();

            }

        return Redirect::to('admin/theme-night/home');
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
        $themeNight = ThemeNight::find($id);
        return view('ThemeNight.Admin.show' , compact('themeNight'));
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
        $themeNight = ThemeNight::find($id);
        return view('ThemeNight.Admin.editForm' , compact('themeNight' , 'id'));
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
        $themeNight = ThemeNight::find($id);

        if (Input::file('picture')->isValid()) {

            $file  = $themeNight->picture;

            File::delete($file);

            $destinationPath = public_path() . "/images/assets"; // upload path
            $extension = Input::file('picture')->getClientOriginalExtension(); // getting image extension
            $filename = "images/assets/" . rand(00000, 99999) . '.' . $extension; // renaming image

            Input::file('picture')->move($destinationPath, $filename);

            $themeNight ->name =  Input::get('name');
            $themeNight ->description = Input::get('description');
            $themeNight -> picture = '/'.$filename;
            $themeNight->save();

        }

        return $id."updated";
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
        $themeNight = ThemeNight::find($id);
        $file  = $themeNight->picture;
        File::delete($file);
        ThemeNight::destroy($id);

        return Redirect::to('admin/theme-night/home');
	}
	 
	 public function assignDjForm($id){
	     
		 //
		 $themeNight = ThemeNight::find($id);
		 $djs = Dj::all();
		 
		 return view('ThemeNight/Admin/assignDjForm', compact('themeNight', 'djs'));
	 
	 
	 }
	 
	 public function assignDj(){
	 
	     $themeNightId = Input::get('themeNightId');
		 $themeNightDjId = Input::get('themeNightDjId');
		 
		 $themeNightDj = new themeNightDj();
		 
		 $themeNightDj -> theme_night_id = $themeNightId;
		 $themeNightDj -> dj_id = $themeNightDjId;
		 $themeNightDj -> save();
		 
		 return redirect()->route('show', $themeNightId)->with('message', 'Dj assigned Successfully');
		
	}
      public function addPartnerForm($id){
	  
	    $themeNight = ThemeNight::find($id);
		$partners = Partner::all();
		 
		 return view('ThemeNight/Admin/addPartnerForm', compact('themeNight', 'partners'));
	  }
	  
	  public function addPartner(){
	  
	     $themeNightId = Input::get('themeNightId');
		 $themeNightPartnerId = Input::get('themeNightPartnerId');
		 
		 $themeNightPartner = new ThemeNightPartner();
		 
		 $themeNightPartner -> theme_night_id = $themeNightId;
		 $themeNightPartner -> partner_id = $themeNightPartnerId;
		 $themeNightPartner -> save();
		 
		 return redirect()->route('show', $themeNightId)->with('message', 'Partner added Successfully');
	  }
	  
	  public function addSponsorForm($id){
	     
		 //
		 $themeNight = ThemeNight::find($id);
		 $sponsors = Sponsor::all();
		 
		 return view('ThemeNight/Admin/addSponsorForm', compact('themeNight', 'sponsors'));
}
       
	 public function addSponsor(){
	  
	     $themeNightId = Input::get('themeNightId');
		 $themeNightSponsorId = Input::get('themeNightSponsorId');
		 
		 $themeNightSponsor = new ThemeNightSponsor();
		 
		 $themeNightSponsor -> theme_night_id = $themeNightId;
		 $themeNightSponsor -> sponsor_id = $themeNightSponsorId;
		 $themeNightSponsor -> save();
		 
		  return redirect()->route('show', $themeNightId)->with('message', 'Sponsor added Successfully');
	  }

}