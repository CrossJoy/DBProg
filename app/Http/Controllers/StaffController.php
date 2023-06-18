<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::orderBy('staff_id', 'asc')->get();
        return view('staff', ['staffs' => $staffs]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $staff = new Staff();
        $staff->staff_id = $request->staff_id;
        $staff->staff_name = $request->staff_name;
        $staff->staff_phone = $request->staff_phone;
        $staff->event_id = $request->event_id;
        $staff->save();
        return redirect('staffs');
    }

    public function show($staff_id)
    {
        //
    }

    public function edit($staff_id)
    {
        $staff = Staff::where('staff_id', $staff_id)->firstOrFail();
        return view('edit-staff', compact('staff'));
    }

    public function update(Request $request, $staff_id)
    {
        $staff = Staff::where('staff_id', $staff_id)->firstOrFail();
        $staff->staff_name = $request->staff_name;
        $staff->staff_phone = $request->staff_phone;
        $staff->event_id = $request->event_id;
        $staff->save();
        return redirect('staffs')->with('success', 'staff updated successfully');
    }

    public function destroy($staff_id)
    {
        $staff = Staff::where('staff_id', $staff_id)->firstOrFail();
        $staff->delete();
        return redirect('staffs')->with('success', 'staff deleted successfully');
    }
    
}