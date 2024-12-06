<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendee;
use App\Models\User;
use App\Models\Event;

class AttendeeController extends Controller
{
    public function index($eventId) {
        $attendee = Attendee::findOrFail($eventId);
        if (!$attendee) {
            return redirect()->route("events.index")->with("error", "Attendee not found");
        }
        $addedAttendees = Attendee::where("event_id", $eventId)->get();
        return view("attendees.index", compact("attendee", "addedAttendees", "eventId"));
    }

    public function create($eventId) {
        return view('attendees.create', compact('eventId'));
    }

    public function store(Request $request, $eventId) {
        $validate = $this->validate($request, [
            "name" => "required",
            "email" => "required|email"
        ]);

        $attendee = new Attendee();
        $attendee->name = $request->name;
        $attendee->email = $request->email;
        $attendee->event_id = $eventId;
        $attendee->save();

        return redirect()->route("attendees.index", compact('eventId'))->with("success", "Attendees added successfully");
    }

    public function edit($eventId, $attendeeId) {
        $attendee = Attendee::findOrFail($attendeeId);
        if (!$attendee) {
            return redirect()->route("attendees.index", compact('eventId'))->with("error", "Attendee not found");
        }
        return view("attendees.edit", compact("attendee", "eventId"));
    }

    public function update(Request $request, $eventId, $attendeeId) {
        $validate = $this->validate($request, [
            "name"=> "required",
            "email"=> "required"
        ]);
        $attendee = Attendee::findOrFail($attendeeId);
        $attendee->name = $request->name;
        $attendee->email = $request->email;
        $attendee->save();
        return redirect()->route("attendees.index", compact('eventId'))->with("success", "Attendee updated successfully");
    }

    public function destroy($eventId, $attendeeId) {
        $attendee = Attendee::findOrFail($attendeeId);
        $attendee->delete();
        return redirect()->route("attendees.index", compact("eventId"))->with("success", "Attendee deleted successfully");
    }
}
