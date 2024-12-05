<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendee;
use App\Models\User;

class AttendeeController extends Controller
{
    public function show($eventId) {
        $attendee = Attendee::findOrFail($eventId);
        return view("attendees.show", compact("attendee", "eventId"));
    }

    public function create($eventId) {
        $users = User::all();
        return view("attendees.create", compact("eventId", "users"));
    }

    public function store(Request $request, $eventId) {
        $attendee = Attendee::findOrFail($eventId);
        // LEFT HERE
    }
}
