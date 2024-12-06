<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy("created_at", "desc")->paginate(10);
        return view("events.index", compact("events"));
    }

    public function show($eventId)
    {
        $event = Event::where("id", $eventId)->first();
        return view("events.show", compact("event"));
    }

    public function calendar() {
        return view("events.calendar");
    }

    public function create()
    {
        return view("events.create");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'location' => 'required|string|max:255',
        ]);

        $event = Event::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'start_time' => $validated['start_time'],
            'end_time' => $validated['end_time'],
            'location' => $validated['location'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('events.index')
            ->with('success', 'Event created successfully.');
    }

    public function edit($eventId)
    {
        $event = Event::where('id', $eventId)->first();
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $eventId)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'location' => 'required|string|max:255',
        ]);

        $event = Event::where('id', $eventId)->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'start_time' => $validated['start_time'],
            'end_time' => $validated['end_time'],
            'location' => $validated['location'],
        ]);

        return redirect()->route('events.index')
            ->with('success', 'Event updated successfully.');
    }

    public function destroy($eventId)
    {
        $event = Event::where('id', $eventId)->first();
        $event->delete();
        return redirect()->route('events.index')
            ->with('success', 'Event deleted successfully.');
    }

    public function get_events()
    {
        $events = Event::all();
        $formattedEvents = $events->map(function ($event) {
            return [
                'title' => $event->title,
                'start' => $event->start_time->format('Y-m-d\TH:i:s'),
                'end' => $event->end_time->format('Y-m-d\TH:i:s'),
                'url' => route('events.show', $event->id),
            ];
        });

        return response()->json($formattedEvents);
    }
}
