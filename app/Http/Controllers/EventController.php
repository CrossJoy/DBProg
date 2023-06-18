<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_id', 'asc')->get();
        return view('event', ['events' => $events]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->event_id = $request->event_id;
        $event->event_name = $request->event_name;
        $event->date_event = $request->date_event;
        $event->venue = $request->venue;
        $event->save();
        return redirect('events');
    }

    public function show($event_id)
    {
        //
    }

    public function edit($event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        return view('edit-event', compact('event'));
    }

    public function update(Request $request, $event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        $event->event_name = $request->event_name;
        $event->date_event = $request->date_event;
        $event->venue = $request->venue;
        $event->save();
        return redirect('events')->with('success', 'Event updated successfully');
    }

    public function destroy($event_id)
    {
        $event = Event::where('event_id', $event_id)->firstOrFail();
        $event->delete();
        return redirect('events')->with('success', 'Event deleted successfully');
    }
    
}