<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventType;
use Illuminate\Http\Request;
use App\Models\EventCategory;

class HomeController extends Controller
{
    // Show homepage
    public function home(){

        $event_categories = EventCategory::get();
        $event_types = EventType::get();
        $events = Event::get();


        // echo count($event_categories);
        // exit;

        return view('home', [
            'event_categories' => $event_categories
        ]);
    }
}
