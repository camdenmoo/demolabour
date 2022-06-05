<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->create([
            'user_type_id' => 8,
            'first_name' => 'Frank',
            'last_name' => 'Jones',
            'gender' => 'male',
            'email' => 'frankjones.web@gmail.com',
            'phone' => '07565840007'
        ]);

        User::factory()->create([
            'user_type_id' => 6,
            'first_name' => 'Ben',
            'last_name' => 'Soffa',
            'gender' => 'male',
            'email' => 'admin@demolabour.com',
            'phone' => '07743267509'
        ]);


        User::factory(50)->create();

        
    }
}
