<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index() 
    {
        return view('index');        
    }

    public function registerIndividual() 
    {
        return view('register.individual');
    }

    public function registerCorperation() 
    {
        return view('register.corperate');
    }

    public function loginIndividual() 
    {
        return view('login.individual');
    }

    public function loginCorperation() 
    {
        return view('login.corperate');
    }
}
