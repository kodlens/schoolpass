<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check()){
        $user = Auth::user();
        return view('welcome')
            ->with('user', $user->only(['lname', 'fname', 'mname', 'suffix']));
    }
    return view('welcome');

});

Auth::routes([
    'login' => 'false'
]);


Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/sample',[App\Http\Controllers\SampleController::class,'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sign-up', [App\Http\Controllers\SignUpController::class, 'index']);

Route::get('/covid-updates', [App\Http\Controllers\CovidUpdatesController::class, 'index']);

Route::post('/sign-up', [App\Http\Controllers\SignUpController::class, 'store']);





//ADDRESS
Route::get('/load-provinces', [App\Http\Controllers\AddressController::class, 'loadProvinces']);
Route::get('/load-cities', [App\Http\Controllers\AddressController::class, 'loadCities']);
Route::get('/load-barangays', [App\Http\Controllers\AddressController::class, 'loadBarangays']);




//ADMINSITRATOR
Route::resource('/dashboard-admin', App\Http\Controllers\Administrator\AdminDashboardController::class);

Route::resource('/users', App\Http\Controllers\Administrator\UserController::class);
Route::get('/get-users', [App\Http\Controllers\Administrator\UserController::class, 'getUsers']);

//AppointmentType
Route::resource('/appointment-type', App\Http\Controllers\Administrator\AppointmentTypeController::class);
Route::get('/get-appointment-types', [App\Http\Controllers\Administrator\AppointmentTypeController::class, 'getAppointmentTypes']);
Route::get('/get-open-appointment-types', [App\Http\Controllers\AppointmentTypeOpenController::class, 'getAppointmentTypes']);
//Offices
Route::get('/get-offices', [App\Http\Controllers\Administrator\OfficeController::class, 'getOffices']);


//USER
Route::resource('/dashboard-user', App\Http\Controllers\User\DashboardUserController::class);
Route::get('/get-user', [App\Http\Controllers\User\DashboardUserController::class, 'getUser']);


Route::resource('/my-appointment', App\Http\Controllers\User\MyAppointmentController::class);
Route::get('/get-my-appointments', [App\Http\Controllers\User\MyAppointmentController::class, 'getMyAppointment']);

Route::resource('/my-profile', App\Http\Controllers\User\MyProfileController::class);
Route::get('/get-my-profile', [App\Http\Controllers\User\MyProfileController::class, 'getProfile']);







Route::get('/session', function(){
    return Session::all();
});
