<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminAccountController;

class AdminAccountController extends Controller
{
    //
    public function login()
    {
        return view('layouts.dashboard');
    }

    public function loginAdmin(Request $request)
    {
        $validateUser = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
                ]
            );
            // dd($request->all()); 

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->back()->withErrors(['email'=>'Invalid username or password']);
        }
        return redirect()->intended('home')->with('message', 'Login Success');

    }
}
