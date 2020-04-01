<?php

namespace App\Http\Controllers;

use App\Fee;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $fees = Fee::has('students')->get();
        return view('nyanumba.welcome')->with('fees',$fees);
    }
}
