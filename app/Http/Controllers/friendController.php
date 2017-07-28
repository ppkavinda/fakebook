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
}
