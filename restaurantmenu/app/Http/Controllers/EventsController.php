<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventsController extends Controller
{
    // Display the events page
    public function index()
    {
        // Add your logic to fetch and pass events data to the view
    $events = Event::all();

        return view('events', compact('events'));
    }

    // Add more methods as needed for event-related actions (e.g., create, edit, delete)
}