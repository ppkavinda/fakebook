<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class friendController extends Controller
{
    public function add($id){
    	auth()->user()->requestAdd($id);
    	return redirect()->back();
    }

    public function confirm($id){
    	auth()->user()->requestConfirm($id);
    	return redirect()->back();
    }

    public function show(){
    	$friends = auth()->user()->friends();
    	return view('profile.friends', compact('friends'));
    }

    public function destroy($id){
        auth()->user()->deleteFriend($id);
        dd('done');
    }
}
