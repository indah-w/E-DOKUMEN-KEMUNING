<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $event = Event::all();
        return view('event.index', compact('event'));
    }

    public function create() {
        return view('event.create');
    }

    public function store(Request $request) {
        Event::create($request->all());
        return redirect()->route('event.index')->with('status', 'Event Stored!!!')->with('success', true);
    }

    public function edit(Event $event) {
        return view('event.edit', compact('event', 'status'));
    }

    public function update(Request $request, Event $event) {

        $event->update($request->all());
        return redirect()->route('event.index')->with('status', 'Event updated!!!')->with('success', true);
    }

    public function destroy(Event $event) {
        $event->delete();
        return redirect()->route('event.index')->with('status', 'Event deleted!!!')->with('success', true);
    }
}
