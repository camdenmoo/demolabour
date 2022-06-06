<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
            'email_verified_at' => now(),
            'password' => '$2y$10$phUu4IyRgxjyNp/nEeSHrOFDmQiiAwhayT9qWp62iN0pBVnRHlHx6',
            'remember_token' => Str::random(10),
            'phone' => '07565840007'
        ]);

        User::factory()->create([
            'user_type_id' => 6,
            'first_name' => 'Ben',
            'last_name' => 'Soffa',
            'gender' => 'male',
            'email' => 'admin@demolabour.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$LPGe1EzbDapJ.PfTMSf5VOUhhQNLRd9r0x9SS/foaFIf.lZfcM.ay',
            'remember_token' => Str::random(10),
            'phone' => '07712345678'
        ]);


        User::factory(50)->create();

        
    }
}
