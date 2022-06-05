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
        return view('events.index', [
            'events' => Event::latest()
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
