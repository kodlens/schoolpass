<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AppointmentType;


class AdminDashboardController extends Controller
{
    //
 
    public function index(){

        $appointments = AppointmentType::all();
       
        return view('administrator.admin-dashboard')
            ->with('appointments', $appointments);

    }




}
