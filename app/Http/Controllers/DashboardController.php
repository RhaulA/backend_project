<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        //dd("test");
        $title["test"] = "prueba";
        return view("home.home",$title);
        
    }
}
   
