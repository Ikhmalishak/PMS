<?php

// app/Http/Controllers/CalendarController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityRecord; // Import the ActivityRecord model

class CalendarController extends Controller
{
    public function index()
    {
        // Fetch events data from the ActivityRecord model
        $events = ActivityRecord::select(['id', 'activity_name', 'activity_date'])
            ->get()
            ->map(function ($event) {
                return [
                    'id' => $event->id,
                    'title' => $event->activity_name,
                    'start' => \Carbon\Carbon::parse($event->activity_date)->format('Y-m-d'),
                ];
            });
        // Return the view with the events data
        return view('ManageCalendar.Index', compact('events'));
    }
}
