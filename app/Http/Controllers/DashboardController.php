<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;

class DashboardController extends Controller 
{
    //
    public function home()
    {
        return view('dashboard.index');
    }

    public function adminlogin(){
        
    }
}
