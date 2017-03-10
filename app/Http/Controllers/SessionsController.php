<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class SessionsController extends Controller
{
    
    public function __construct ()
    {
    	$this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {
    	$this->validate(request(),[
    		'login' => 'required',
    		'password' => 'required',
    	]);
  
    	if (! auth()->attempt(request(['login', 'password']))) {
    		return back()->withErrors([
    			'message' => 'something wrong. Vvedy snachala'
    		]);
    	}

    	return redirect()->route('admin');
    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
