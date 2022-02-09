<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    public function getOffices(){
        return Office::all();
    }

}
