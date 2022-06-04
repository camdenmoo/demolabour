<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\EventCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventCategory::insert([
            [
                // Canvassing
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1, 'name' => 'Canvassing', 'slug' => 'canvassing', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Phonebanking
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1, 'name' => 'Phonebanking', 'slug' => 'phonebanking', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Leafleting
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1,  'name' => 'Leafleting', 'slug' => 'leafleting', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Street stall
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1,  'name' => 'Street Stall', 'slug' => 'street-stall', 'image' => NULL, 'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Polling day campaign centre
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1,  'name' => 'Polling Day Campaign Centre', 'slug' => 'polling-day-campaign-centre', 'image' => NULL, 'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Campaign prep and admin
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1, 'name' => 'Campaign Prep and Admin', 'slug' => 'campaign-prep-and-admin', 'image' => NULL, 'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Members' Meeting
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 2, 'name' => 'Members\' Meeting', 'slug' => 'members-meeting', 'image' => NULL, 'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Rally or Speech
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 2, 'name' => 'Rally or Speech', 'slug' => 'rally-or-speech', 'image' => NULL, 'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Fundraiser
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 2, 'name' => 'Fundraiser', 'slug' => 'fundraiser', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Social Event
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 2, 'name' => 'Social Event', 'slug' => 'social-event', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Conference
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 3, 'name' => 'Conference', 'slug' => 'conference', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Surgery
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 4, 'name' => 'Surgery', 'slug' => 'surgery', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ]
        ]);
    }
}
