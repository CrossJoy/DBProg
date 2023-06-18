<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::orderBy('reg_id', 'asc')->get();
        return view('registration', ['registrations' => $registrations]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $registration = new Registration();
        $registration->reg_id = $request->reg_id;
        $registration->event_id = $request->event_id;
        $registration->stud_id = $request->stud_id;
        $registration->reg_date = $request->reg_date;
        $registration->save();
        return redirect('registrations');
    }

    public function show($reg_id)
    {
        //
    }

    public function edit($reg_id)
    {
        $registration = Registration::where('reg_id', $reg_id)->firstOrFail();
        return view('edit-registration', compact('registration'));
    }

    public function update(Request $request, $reg_id)
    {
        $registration = registration::where('reg_id', $reg_id)->firstOrFail();
        $registration->event_id = $request->event_id;
        $registration->stud_id = $request->stud_id;
        $registration->reg_date = $request->reg_date;
        $registration->save();
        return redirect('registrations')->with('success', 'registration updated successfully');
    }

    public function destroy($reg_id)
    {
        $registration = Registration::where('reg_id', $reg_id)->firstOrFail();
        $registration->delete();
        return redirect('registrations')->with('success', 'registration deleted successfully');
    }
    
    public function checkRegistrationForm()
    {
        return view('registration.check');
    }

    public function checkRegV()
    {
    $registrations = null;
    return view('check-reg', ['registrations' => $registrations]);
    }
    
    public function checkRegistration(Request $request)
    {
        $eventId = $request->input('event_id');
        $registrationCount = $this->getEventRegistrationsCount($eventId);
        
        if ($registrationCount === 0) {
            $message = 'The event does not exist';
        } else {
            $message = 'Total Registrations: ' . $registrationCount;
        }
        
        return view('check-reg', ['message' => $message]);
    }
    
    private function getEventRegistrationsCount($eventId)
    {
        $result = DB::select('SELECT COUNT(*) AS reg_count FROM REGISTRATION WHERE EVENT_ID = ?', [$eventId]);
        
        if ($result) {
            return $result[0]->reg_count;
        } else {
            return 0;
        }
    }
}