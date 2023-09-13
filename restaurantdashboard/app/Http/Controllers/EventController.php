<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('cms.events', compact('events'));
    }

    public function create()
    {
        return view('cms.add-events');
    }

    public function store(Request $request)
    {
        // Validate and store a new event
        $request->validate([
            'title' => 'required|max:255',
            'time' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Validate and require an image
        ]);
    
        $imageData = null; // Initialize image data as null
    
        if ($request->hasFile('image')) {
            // Get the uploaded file and convert it to binary data
            $image = $request->file('image');
            $imageData = file_get_contents($image->getRealPath());
        }
    
        Event::create([
            'title' => $request->input('title'),
            'time' => $request->input('time'),
            'description' => $request->input('description'),
            'image' => $imageData, // Store the binary image data as MEDIUMBLOB
        ]);
    
        return redirect()->route('events.index')->with('success', 'Event added successfully');
    }

    public function edit(Event $event)
    {
        return view('cms.edit-events', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        // Validate and update the event
        $request->validate([
            'title' => 'required|max:255',
            'time' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif', // Allow image field to be empty or contain an image
        ]);
    
        // Check if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image from the database if it exists
            if ($event->image) {
                DB::table('events')->where('id', $event->id)->update(['image' => null]);
            }
    
            // Get the uploaded file and convert it to binary data
            $image = $request->file('image');
            $imageData = file_get_contents($image->getRealPath());
    
            // Update the 'image' column with the new binary data
            DB::table('events')->where('id', $event->id)->update(['image' => $imageData]);
        }
    
        // Update other fields
        $event->title = $request->input('title');
        $event->time = $request->input('time');
        $event->description = $request->input('description');
        
        // Save the event
        $event->save();
    
        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }

    public function destroy(Event $event)
    {
        // Delete the event
        $event->delete();
    
        return redirect()->route('events.index')->with('success', 'Event deleted successfully');
    }
}
