<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;

class UserController extends Controller
{
    public function update_image(Request $request){

    	if($request->hasFile('image')){
    		$image = $request->file('image');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
    		Image::make($image)->resize(300,300)->save( publi_path('/images/Uploads/'));

    		$user = Auth::user();
    		$user->image = $filename;
    		$user->save();
    	}
    	return view('profile',array('user' =>Auth::user()));
    }
}
