<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OfficeAppointmentController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('office');
    }


    public function index(){
        return view('office.office-appointment');
    }

    public function getOfficeAppointments(Request $req){
        $user = Auth::user();
        $data = DB::table('appointments as a')
            ->join('appointment_types as b', 'a.appointment_type_id', 'b.appointment_type_id')
            ->join('offices as c', 'b.office_id', 'c.office_id')
            ->leftJoin('users as d', 'c.office_id', 'd.office_id')
            ->leftJoin('users as e', 'a.appointment_user_id', 'e.user_id')
            ->where('d.user_id', $user->user_id)
            ->paginate($req->perpage);

        return $data;
    }

    public function approveAppointment($id){
        $data = Appointment::find($id);
        $data->is_approved = 1;
        $data->save();


        return response()->json([
            'status' => 'approved'
        ],200);
    }

    public function cancelAppointment($id){
        $data = Appointment::find($id);
        $data->is_approved = 2;
        $data->save();


        return response()->json([
            'status' => 'cancelled'
        ],200);
    }
}
