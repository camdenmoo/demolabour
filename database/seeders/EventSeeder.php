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
                // Event 1
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
                'location' => 'junction of Halford Lane/Penny Park Lane, CV6 2GT',
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
            ],

            [   
                // Event 2
                'hex' => Str::random(11),
                'user_id' => NULL,
                'event_category_id' => 2,
                'event_type_id' => 8,
                'host_id' => NULL,
                'contact_id' => NULL,
                'caption' => NULL,
                'image' => NULL,
                'description' => '<p>Working people have had enough.</p><p>Join the TUC march & rally on Saturday 18 June with Woky Labour members. We\'ll try and arrange transport for anybody wanting to attend - RSVP and get in contact!</p><p><a href="https://www.tuc.org.uk/DemandBetter">https://www.tuc.org.uk/DemandBetter</a></p><p>March begins 12pm from Portland Place, London</p>',
                'region_id' => NULL,
                'constituancy_id' => NULL,
                'venue' => NULL,
                'location' => 'Portland Place, London',
                'address_line_one' => NULL,
                'address_line_two' => NULL,
                'city_town' => 'London',
                'county_id' => NULL,
                'postcode' => 'CV6 2GT',
                'start_date' => '2022-06-18 00:00:00',
                'end_date' => '2022-06-18 00:00:00',
                'start_time' => '12:00',
                'end_time' => '16:00',
                'created_at' => now(),
                'updated_at' => now(),
                'active' => 1
            ],

            [   
                // Event 3
                'hex' => Str::random(11),
                'user_id' => NULL,
                'event_category_id' => 2,
                'event_type_id' => 7,
                'host_id' => NULL,
                'contact_id' => NULL,
                'caption' => NULL,
                'image' => NULL,
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'region_id' => NULL,
                'constituancy_id' => NULL,
                'venue' => NULL,
                'location' => 'The REP Theatre, Birmingham',
                'address_line_one' => NULL,
                'address_line_two' => NULL,
                'city_town' => 'Birmingham',
                'county_id' => NULL,
                'postcode' => 'CV6 2GT',
                'start_date' => '2022-06-12 00:00:00',
                'end_date' => '2022-06-12 00:00:00',
                'start_time' => '15:00',
                'end_time' => '17:00',
                'created_at' => now(),
                'updated_at' => now(),
                'active' => 1
            ],

            [   
                // Event 4
                'hex' => Str::random(11),
                'user_id' => NULL,
                'event_category_id' => 2,
                'event_type_id' => 9,
                'host_id' => NULL,
                'contact_id' => NULL,
                'caption' => NULL,
                'image' => NULL,
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'region_id' => NULL,
                'constituancy_id' => NULL,
                'venue' => NULL,
                'location' => 'Manchester Piccadilly, Manchester',
                'address_line_one' => NULL,
                'address_line_two' => NULL,
                'city_town' => 'Manchester',
                'county_id' => NULL,
                'postcode' => 'CV6 2GT',
                'start_date' => '2022-06-22 00:00:00',
                'end_date' => '2022-06-22 00:00:00',
                'start_time' => '12:00',
                'end_time' => '14:00',
                'created_at' => now(),
                'updated_at' => now(),
                'active' => 1
            ],

            [   
                // Event 5
                'hex' => Str::random(11),
                'user_id' => NULL,
                'event_category_id' => 1,
                'event_type_id' => 3,
                'host_id' => NULL,
                'contact_id' => NULL,
                'caption' => NULL,
                'image' => NULL,
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'region_id' => NULL,
                'constituancy_id' => NULL,
                'venue' => NULL,
                'location' => 'Nuneaton Station',
                'address_line_one' => NULL,
                'address_line_two' => NULL,
                'city_town' => 'Nuneaton',
                'county_id' => NULL,
                'postcode' => 'CV6 2GT',
                'start_date' => '2022-06-30 00:00:00',
                'end_date' => '2022-06-30 00:00:00',
                'start_time' => '14:00',
                'end_time' => '18:00',
                'created_at' => now(),
                'updated_at' => now(),
                'active' => 1
            ],

            [   
                // Event 15
                'hex' => Str::random(11),
                'user_id' => NULL,
                'event_category_id' => 1,
                'event_type_id' => 6,
                'host_id' => NULL,
                'contact_id' => NULL,
                'caption' => NULL,
                'image' => NULL,
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'region_id' => NULL,
                'constituancy_id' => NULL,
                'venue' => NULL,
                'location' => 'Villa Park, Birmingham',
                'address_line_one' => NULL,
                'address_line_two' => NULL,
                'city_town' => 'Birmingham',
                'county_id' => NULL,
                'postcode' => 'CV6 2GT',
                'start_date' => '2022-06-09 00:00:00',
                'end_date' => '2022-06-09 00:00:00',
                'start_time' => '15:00',
                'end_time' => '17:00',
                'created_at' => now(),
                'updated_at' => now(),
                'active' => 1
            ],

            [   
                // Event 16
                'hex' => Str::random(11),
                'user_id' => NULL,
                'event_category_id' => 1,
                'event_type_id' => 4,
                'host_id' => NULL,
                'contact_id' => NULL,
                'caption' => NULL,
                'image' => NULL,
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'region_id' => NULL,
                'constituancy_id' => NULL,
                'venue' => NULL,
                'location' => 'Preston',
                'address_line_one' => NULL,
                'address_line_two' => NULL,
                'city_town' => 'Preston',
                'county_id' => NULL,
                'postcode' => 'CV6 2GT',
                'start_date' => '2022-06-11 00:00:00',
                'end_date' => '2022-06-11 00:00:00',
                'start_time' => '11:00',
                'end_time' => '17:00',
                'created_at' => now(),
                'updated_at' => now(),
                'active' => 1
            ],

            [   
                // Event 17
                'hex' => Str::random(11),
                'user_id' => NULL,
                'event_category_id' => 2,
                'event_type_id' => 8,
                'host_id' => NULL,
                'contact_id' => NULL,
                'caption' => NULL,
                'image' => NULL,
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'region_id' => NULL,
                'constituancy_id' => NULL,
                'venue' => NULL,
                'location' => 'Millenium Centre, Cardiff Bay, Cardiff',
                'address_line_one' => NULL,
                'address_line_two' => NULL,
                'city_town' => 'Cardif',
                'county_id' => NULL,
                'postcode' => 'CV6 2GT',
                'start_date' => '2022-06-09 00:00:00',
                'end_date' => '2022-06-09 00:00:00',
                'start_time' => '15:00',
                'end_time' => '17:00',
                'created_at' => now(),
                'updated_at' => now(),
                'active' => 1
            ],

            [   
                // Event 18
                'hex' => Str::random(11),
                'user_id' => NULL,
                'event_category_id' => 1,
                'event_type_id' => 7,
                'host_id' => NULL,
                'contact_id' => NULL,
                'caption' => NULL,
                'image' => NULL,
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'region_id' => NULL,
                'constituancy_id' => NULL,
                'venue' => NULL,
                'location' => 'Kettlebrook, Tamworth',
                'address_line_one' => NULL,
                'address_line_two' => NULL,
                'city_town' => 'Tamworth',
                'county_id' => NULL,
                'postcode' => 'CV6 2GT',
                'start_date' => '2022-06-25 00:00:00',
                'end_date' => '2022-06-25 00:00:00',
                'start_time' => '16:00',
                'end_time' => '19:00',
                'created_at' => now(),
                'updated_at' => now(),
                'active' => 1
            ],

            [   
                // Event 19
                'hex' => Str::random(11),
                'user_id' => NULL,
                'event_category_id' => 1,
                'event_type_id' => 5,
                'host_id' => NULL,
                'contact_id' => NULL,
                'caption' => NULL,
                'image' => NULL,
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'region_id' => NULL,
                'constituancy_id' => NULL,
                'venue' => NULL,
                'location' => 'Theatre Royal, Newcastle',
                'address_line_one' => NULL,
                'address_line_two' => NULL,
                'city_town' => 'Newcastle',
                'county_id' => NULL,
                'postcode' => 'CV6 2GT',
                'start_date' => '2022-06-15 00:00:00',
                'end_date' => '2022-06-15 00:00:00',
                'start_time' => '10:00',
                'end_time' => '14:00',
                'created_at' => now(),
                'updated_at' => now(),
                'active' => 1
            ],

            [   
                // Event 20
                'hex' => Str::random(11),
                'user_id' => NULL,
                'event_category_id' => 1,
                'event_type_id' => 3,
                'host_id' => NULL,
                'contact_id' => NULL,
                'caption' => NULL,
                'image' => NULL,
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'region_id' => NULL,
                'constituancy_id' => NULL,
                'venue' => NULL,
                'location' => 'The Arnolfini, Bristol',
                'address_line_one' => NULL,
                'address_line_two' => NULL,
                'city_town' => 'Central Bristol',
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
