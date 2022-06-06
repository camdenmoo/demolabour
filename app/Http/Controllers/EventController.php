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

    // Show event types for this category
    public function event_category(EventCategory $event_category){

        $event_types = EventType::where('event_category_id', $event_category->id)->get();

        return view('events.show-event-types', [
            'event_category' => $event_category,
            'event_types' => $event_types
        ]);
    }
}
