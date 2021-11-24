<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function nimchi(){
        return view('user'); //blade.php
    }
}
