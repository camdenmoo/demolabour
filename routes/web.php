<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Common Resource Routes:

// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit a listing
// update - Update listing
// destroy - Delete listing


// Routes for HomeController

// Show Homepage
Route::get('/', [HomeController::class, 'home']);


// Routes for EventController

// Show All Events
Route::get('/events', [EventController::class, 'show']);


