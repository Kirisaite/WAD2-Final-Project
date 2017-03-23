<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Db;
use Illuminate\Http\Request;
use App\japanAnimation;
use Storage;


class AnimeController extends Controller
{
    public function home(Request $request){
    	$japananimations = japanAnimation::all();
    	return view('/AnimeHome', compact('japananimations'));
    }
    public function addNew(Request $request){
    	return view('/addAnime');
    }
    public function saveAnime(Request $request){
    	$aName = $request->aName;
    	$genre = $request->genre;
    	$studio = $request->studio;
    	$description = $request->description;
    	$background = $request->background;
    	$seasonAired = $request->seasonAired;
    	$dateAired = $request->dateAired;
    	$numberOfEp = $request->numberOfEp;
    	$status = $request->status;
    	$image = $request->file('image');
		
		$filename = $image->getClientOriginalName();  	
    	Storage::put('upload/images/'. $filename, file_get_contents($request->file('image')->getRealPath()));

    	$japananimations = new japanAnimation;
     	$japananimations->aName = $aName;
    	$japananimations->genre = $genre;
    	$japananimations->studio = $studio;
    	$japananimations->description = $description;
    	$japananimations->background = $background;
    	$japananimations->seasonAired = $seasonAired;
    	$japananimations->dateAired = $dateAired;
    	$japananimations->numberOfEp = $numberOfEp;
    	$japananimations->status = $status;
    	$japananimations->image = $filename;
    	$japananimations->mime = $image->getClientMimeType();
    	$japananimations->save();

    	return redirect('/home');
    }
    public function nextPage(Request $request, $id){
        
        $japananimations = japanAnimation::find($id);
        return view('AnimeNextPage',  compact('japananimations'));
    }
    public function trailer(Request $request, $id){
        $japananimations = japanAnimation::find($id);
        return view('/Trailer', compact('japananimations'));
    }
    public function doEdit(Request $request, $id){
    	 $japananimations = japanAnimation::find($id);
        return view('/editAnime', compact('japananimations'));
    }
    public function saveEdit(Request $request){
    	$id = $request->id;
    	$aName = $request->aName;
    	$genre = $request->genre;
    	$studio = $request->studio;
    	$description = $request->description;
    	$background = $request->background;
    	$seasonAired = $request->seasonAired;
    	$dateAired = $request->dateAired;
    	$numberOfEp = $request->numberOfEp;
    	$status = $request->status;
    	$image = $request->file('image');
		
		$filename = $image->getClientOriginalName();  	
    	Storage::put('upload/images/'. $filename, file_get_contents($request->file('image')->getRealPath()));

    	$japananimations = japanAnimation::find($id);
     	$japananimations->aName = $aName;
    	$japananimations->genre = $genre;
    	$japananimations->studio = $studio;
    	$japananimations->description = $description;
    	$japananimations->background = $background;
    	$japananimations->seasonAired = $seasonAired;
    	$japananimations->dateAired = $dateAired;
    	$japananimations->numberOfEp = $numberOfEp;
    	$japananimations->status = $status;
    	$japananimations->image = $filename;
    	$japananimations->mime = $image->getClientMimeType();
    	$japananimations->save();

    	return redirect('/home');
    }

    public function showLogin()
    {
    	return view('/login');
    } 

    public function doLogin()
    {
   		$rules = array(

    	'name'    => 'required|email',
    	'password' => 'required|alphaNum|min:3'
    	);
   
   		$validator = Validator::make(Input::all(), $rules);

   		if ($validator->fails()) {
   			 return Redirect::to('login')
        		->withErrors($validator) 
        		->withInput(Input::except('password'));
		} 		
		
		else {

		    $userdata = array(
        	'email'     => Input::get('name'),
        	'password'  => Input::get('password')
    		);
		}
		
			if(Auth::attemp($admindata)){
		   	 echo 'SUCCESS!';
			}
			else{
			 return Redirect::to('login');
			}
		 }
    }