<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('mainpage');
});

Route::get('students', [StudentController::class, 'index']);

Route::get('/add-student', function () {
    return view('add-student');
});


// Route::get('/student', function () {
//     return view('student');
// });


Route::resource('addstudent', StudentController::class);
Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{stud_id}', [StudentController::class, 'show']);
Route::get('/students/{stud_id}/edit', [StudentController::class, 'edit']);
Route::put('/students/{stud_id}', [StudentController::class, 'update']);
Route::delete('/students/{stud_id}', [StudentController::class, 'destroy']);
Route::put('/update-student/{stud_id}', [StudentController::class, 'update'])->name('update-student');

//-------------------------------------------------------

Route::get('events', [EventController::class, 'index']);

Route::get('/add-event', function () {
    return view('add-event');
});


Route::get('/event', function () {
    return view('event');
});


Route::resource('addevent', EventController::class);
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/{event_id}', [EventController::class, 'show']);
Route::get('/events/{event_id}/edit', [EventController::class, 'edit']);
Route::put('/events/{event_id}', [EventController::class, 'update']);
Route::delete('/events/{event_id}', [EventController::class, 'destroy']);
Route::put('/update-event/{event_id}', [EventController::class, 'update'])->name('update-event');

//-------------------------------------------------------

Route::get('registrations', [RegistrationController::class, 'index']);

Route::get('/add-registration', function () {
    return view('add-registration');
});


Route::get('/registration', function () {
    return view('registration');
});


Route::resource('addregistration', RegistrationController::class);
Route::get('/registrations', [RegistrationController::class, 'index']);
Route::get('/registrations/create', [RegistrationController::class, 'create']);
Route::post('/registrations', [RegistrationController::class, 'store']);
Route::get('/registrations/{registration_id}', [RegistrationController::class, 'show']);
Route::get('/registrations/{registration_id}/edit', [RegistrationController::class, 'edit']);
Route::put('/registrations/{registration_id}', [RegistrationController::class, 'update']);
Route::delete('/registrations/{registration_id}', [RegistrationController::class, 'destroy']);
Route::put('/update-registration/{registration_id}', [RegistrationController::class, 'update'])->name('update-registration');

//-------------------------------------------------------

Route::get('staffs', [StaffController::class, 'index']);

Route::get('/add-staff', function () {
    return view('add-staff');
});


Route::get('/staff', function () {
    return view('staff');
});


Route::resource('addstaff', StaffController::class);
Route::get('/staffs', [StaffController::class, 'index']);
Route::get('/staffs/create', [StaffController::class, 'create']);
Route::post('/staffs', [StaffController::class, 'store']);
Route::get('/staffs/{staff_id}', [StaffController::class, 'show']);
Route::get('/staffs/{staff_id}/edit', [StaffController::class, 'edit']);
Route::put('/staffs/{staff_id}', [StaffController::class, 'update']);
Route::delete('/staffs/{staff_id}', [StaffController::class, 'destroy']);
Route::put('/update-staff/{staff_id}', [StaffController::class, 'update'])->name('update-staff');

//-------------------------------------------------------

Route::get('/check-registration', [RegistrationController::class, 'checkRegistrationForm'])->name('registration.form');
Route::post('/check-registration', [RegistrationController::class, 'checkRegistration'])->name('registration.check');

Route::get('/check-reg', [RegistrationController::class, 'checkRegV']);

Route::get('/check-reg-student', [StudentController::class, 'checkRegistrationsForm'])->name('registrations.form');
Route::post('/check-reg-student', [StudentController::class, 'checkRegistrations'])->name('registrations.check');

Route::get('/retrieve', [StudentController::class, 'retrieve']);
Route::post('/retrieve-student-details', [StudentController::class, 'retrieveStudentDetails']);
