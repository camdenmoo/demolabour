<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

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
}
