<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventType;
use Illuminate\Http\Request;
use App\Models\EventCategory;

class EventController extends Controller
{
    // Show all events
    public function show(){

        // {{Carbon::parse($timestamp)->format('l S F, H:i')}}

        $events = Event::latest();

        

        return view('events.index', [
            'events' => $events
                ->filter(request(['tag', 'search']))
                ->paginate(6)
        ]);
    }

    // Show for to create a new event
    public function create(){

        $event_categories = EventCategory::get();
        $event_types = EventType::get();

        return view('events.create', [
            'event_categories' => $event_categories,
            'event_types' => $event_types
        ]);
    }
}
