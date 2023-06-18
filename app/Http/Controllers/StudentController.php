<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('stud_id', 'asc')->get();
        return view('student', ['students' => $students]);
    }

    public function create()
    {
        $students = new Student();
        return view('add-student', ['students' => $students]);
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->stud_id = $request->stud_id;
        $student->stud_name = $request->stud_name;
        $student->stud_kulliyah = $request->stud_kulliyah;
        $student->stud_phone = $request->stud_phone;
        $student->save();
        return redirect('students');
    }

    public function show($stud_id)
    {
        //
    }

    public function edit($stud_id)
    {
        $student = Student::where('stud_id', $stud_id)->firstOrFail();
        return view('edit-student', compact('student'));
    }

    public function update(Request $request, $stud_id)
    {
        $student = Student::where('stud_id', $stud_id)->firstOrFail();
        $student->stud_name = $request->stud_name;
        $student->stud_kulliyah = $request->stud_kulliyah;
        $student->stud_phone = $request->stud_phone;
        $student->save();
        return redirect('students')->with('success', 'Student updated successfully');
    }

    public function destroy($stud_id)
    {
        $student = Student::where('stud_id', $stud_id)->firstOrFail();
        $student->delete();
        return redirect('students')->with('success', 'Student deleted successfully');
    }
    
    public function checkRegistrationsForm()
{
    $registrations = null;
    return view('check-reg-student', ['registrations' => $registrations]);
}

public function checkRegistrations()
{
    $student_id = request('student_id');

    $registrations = DB::select('SELECT E.EVENT_NAME AS event_name, E.DATE_EVENT AS date_event, E.VENUE AS venue
    FROM EVENT E
    INNER JOIN REGISTRATION R ON E.EVENT_ID = R.EVENT_ID
    WHERE R.STUD_ID = ?', [$student_id]);

    return view('check-reg-student', ['registrations' => $registrations]);
}

public function retrieve()
{
    return view('retrieve');
}
public function retrieveStudentDetails(Request $request)
{
    $studId = $request->input('stud_id');

    $result = DB::selectOne("SELECT stud_name, stud_kulliyah, stud_phone FROM student WHERE stud_id = :stud_id", ['stud_id' => $studId]);

    $oStudName = $result->stud_name;
    $oStudKulliyah = $result->stud_kulliyah;
    $oStudPhone = $result->stud_phone;

    // Output the retrieved student details
    echo 'Name: ' . $oStudName . '<br>';
    echo 'Kulliyah: ' . $oStudKulliyah . '<br>';
    echo 'Phone: ' . $oStudPhone . '<br>';
}
}