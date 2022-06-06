<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            [
                'hex' => Str::random(11),
                'user_id' => NULL,
                'event_category_id' => 1,
                'event_type_id' => 1,
                'host_id' => NULL,
                'contact_id' => NULL,
                'caption' => NULL,
                'image' => NULL,
                'description' => '<p>Join Taiwo Owatemi MP and the Coventry North West Labour team to speak to voters in Holbrooks Ward!</p><p>We\'ll be canvassing local residents to find out about any issues in the local area and to speak to them about any concerns they may have.</p><p>Don\'t worry if you haven\'t done doorknocking for Labour before, we will have experienced campaigners who can provide training.</p><p>Meet 3pm at the junction of Halford Lane/Penny Park Lane, CV6 2GT.</p>',
                'region_id' => NULL,
                'constituancy_id' => NULL,
                'venue' => NULL,
                'address_line_one' => NULL,
                'address_line_two' => NULL,
                'city_town' => 'Holbrooks',
                'county_id' => NULL,
                'postcode' => 'CV6 2GT',
                'start_date' => '2022-06-09 00:00:00',
                'end_date' => '2022-06-09 00:00:00',
                'start_time' => '15:00',
                'end_time' => '17:00',
                'created_at' => now(),
                'updated_at' => now(),
                'active' => 1
            ]

        ]);
    }
}
