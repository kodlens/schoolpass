<?php

namespace App\Http\Controllers\office;

use App\Http\Controllers\Controller;
use App\Models\AppointmentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyOfficeController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('office');
    }


    public function index(){
        return view('office.my-office');
    }

    public function getOffice(){
        $user = Auth::user();

        $data = AppointmentType::where('office_id', $user->office_id)
            ->first();
        return $data;
    }



}
