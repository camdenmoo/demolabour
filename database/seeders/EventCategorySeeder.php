<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\EventCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventCategorySeeder extends Seeder
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
                // Campaigning
                'hex' => Str::random(11), 'user_id' => NULL, 'name' => 'Campaigning', 'slug' => 'campaigning', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Events
                'hex' => Str::random(11), 'user_id' => NULL, 'name' => 'Events', 'slug' => 'events', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Training
                'hex' => Str::random(11), 'user_id' => NULL, 'name' => 'Training', 'slug' => 'training', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Conference
                'hex' => Str::random(11), 'user_id' => NULL, 'name' => 'Conference', 'slug' => 'conference', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
            [
                // Surgery
                'hex' => Str::random(11), 'user_id' => NULL, 'name' => 'Surgery', 'slug' => 'surgery', 'image' => NULL,
                'description' => NULL, 'created_at' => now(), 'updated_at' => now(), 'active' => 1
            ],
        ]);
    }
}
