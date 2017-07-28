<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(){
        $user = User::where('id', auth()->id())->first();
        return view('profile.index', compact('user'));
    }

    public function show($id){
        $user = User::where('id', $id)
            ->first();
        return view('profile.show', compact('user'));
    }

    public function edit(Request $request){
        $this->validate($request, [
            'fname' => 'max:50',
            'lname' => 'max:50',
            'dob' => 'date',
            'gender' => 'in:M,F',
            'location' => 'max:50',
        ]);

        User::where('id', auth()->id())
            ->update([
            'fname' => request('fname'),
            'lname' => request('lname'),
            'dob' => request('dob'),
            'gender' => request('gender'),
            'location' => request('location'),

        ]);
        return redirect()->back();
    }
}
