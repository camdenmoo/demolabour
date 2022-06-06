<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;

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

// Show Form for Creating a New Event
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');

// Show event types for this event category
Route::get('/events/{event_category:name}', [EventController::class, 'event_category']);

// Show events for this event_type in this event_category
Route::get('/events/{event_category:name}/{event_type:name}', [EventController::class, 'event_type']);



// Routes for UserController

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');

// Log user In
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Registration Form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// Store New Registered User
Route::post('/users', [UserController::class, 'store'])->middleware('guest');



// Routes for DashboardController

// Show Login Form
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');




