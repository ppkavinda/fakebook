<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function create(){
    	return view('session.create');
    }

    public function store(){
    	$this->validate(request(),[
    		'email' => 'required|email',
    		'password' => 'required',
    	]);

    	if(! auth()->attempt(request(['email', 'password']))){
    		return redirect()->back()->withError(['message' => 'credentials didn\'t matched.']);
    	}

    	return redirect()->home();
    }

    public function destroy(){
    	auth()->logout();
    	return redirect()->home();
    }
}
