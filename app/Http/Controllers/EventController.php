<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $data = Event::all();

        return view('fullcalendar', ['events' => $data]);
    }

    public function store(Request $request)
    {
        $event = Event::create($request->all());

        return response()->json(['event' => $event]);
    }

    public function update(Request $request)
    {
        $event = Event::findOrFail($request->event_id);
        $event->update($request->all());

        return response()->json(['event' => $event]);
    }
}
