<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    public function dashboard(){

        return view('backend.pages.dashboard');
    }
}
