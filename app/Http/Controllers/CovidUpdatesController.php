<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidUpdatesController extends Controller
{
     public function index()
    {
        return view('covid-updates');
}
}