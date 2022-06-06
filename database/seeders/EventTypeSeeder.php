<?php

namespace Database\Seeders;

use App\Models\EventType;
use Illuminate\Support\Str;
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
        EventType::insert([
            [
                // Canvassing
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1, 'name' => 'Canvassing', 'slug' => 'canvassing', 'image' => NULL,
                'description' => NULL, 'bg_color' => '#39a2ae', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Phonebanking
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1, 'name' => 'Phonebanking', 'slug' => 'phonebanking', 'image' => NULL,
                'description' => NULL, 'bg_color' => '#561f37', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Leafleting
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1,  'name' => 'Leafleting', 'slug' => 'leafleting', 'image' => NULL,
                'description' => NULL, 'bg_color' => '#006992', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Street stall
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1,  'name' => 'Street Stall', 'slug' => 'street-stall', 'image' => NULL, 'description' => NULL, 'bg_color' => '#eca400', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Polling day campaign centre
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1,  'name' => 'Polling Day Campaign Centre', 'slug' => 'polling-day-campaign-centre', 'image' => NULL, 'description' => NULL, 'bg_color' => '#81a684', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Campaign prep and admin
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 1, 'name' => 'Campaign Prep and Admin', 'slug' => 'campaign-prep-and-admin', 'image' => NULL, 'description' => NULL, 'bg_color' => '#0e0f19', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Members' Meeting
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 2, 'name' => 'Members\' Meeting', 'slug' => 'members-meeting', 'image' => NULL, 'description' => NULL, 'bg_color' => '#96a13a', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Rally or Speech
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 2, 'name' => 'Rally or Speech', 'slug' => 'rally-or-speech', 'image' => NULL, 'description' => NULL, 'bg_color' => '#496e46', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Fundraiser
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 2, 'name' => 'Fundraiser', 'slug' => 'fundraiser', 'image' => NULL,
                'description' => NULL, 'bg_color' => '#b7990d', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Social Event
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 2, 'name' => 'Social Event', 'slug' => 'social-event', 'image' => NULL,
                'description' => NULL, 'bg_color' => '#ce7b91', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Training (online)
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 3, 'name' => 'Training (online)', 'slug' => 'training-online', 'image' => NULL, 'description' => NULL, 'bg_color' => '#054a91', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Training (in person)
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 3, 'name' => 'Training (inperson)', 'slug' => 'training-in-person', 'image' => NULL, 'description' => NULL, 'bg_color' => '#717ec3', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Conference
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 4, 'name' => 'Conference', 'slug' => 'conference', 'image' => NULL,
                'description' => NULL, 'bg_color' => '#8f5c38', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Surgery
                'hex' => Str::random(11), 'user_id' => NULL, 'event_category_id' => 5, 'name' => 'Surgery', 'slug' => 'surgery', 'image' => NULL,
                'description' => NULL, 'bg_color' => '#373f51', 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ]
        ]);
    }
}
