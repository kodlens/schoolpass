<?php

namespace App\Http\Controllers\Administrator;

use App\Models\AppointmentType;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentTypeController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
        return view('administrator.appointment-type');
    }

    public function getAppointmentTypes(Request $req){
        $sort = explode('.', $req->sort_by);

        $data = AppointmentType::where('appointment_type', 'like', $req->type . '%')
            ->orderBy($sort[0], $sort[1])
            ->paginate($req->perpage);

        return $data;
    }

    public function show($id){
        return AppointmentType::find($id);
    }



    public function store(Request $req){
        $validate = $req->validate([
            'appointment_type' => ['required', 'max:100', 'string', 'unique:appointment_types']
        ]);

        AppointmentType::create([
            'appointment_type' => strtoupper($req->appointment_type)
        ]);

        return response()->json([
            'status' => 'saved'
        ],200);
    }

    public function update(Request $req, $id){
        $validate = $req->validate([
            'appointment_type' => ['required', 'max:100', 'string', 'unique:appointment_types,appointment_type,' .$id .',appointment_type_id']
        ]);

        $data = AppointmentType::find($id);
        $data->appointment_type = strtoupper($req->appointment_type);
        $data->save();

        return response()->json([
            'status' => 'updated'
        ],200);
    }

    public function destroy($id){
        AppointmentType::destroy($id);
    }

}
