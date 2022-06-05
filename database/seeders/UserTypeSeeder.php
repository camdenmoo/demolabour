<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::insert([
            [
                // Registered
                'hex' => Str::random(11), 'name' => 'Registered', 'slug' => 'registered', 'active' => 1
            ],
            [
                // Volunteer
                'hex' => Str::random(11), 'name' => 'Volunteer', 'slug' => 'volunteer', 'active' => 1
            ],
            [
                // Member
                'hex' => Str::random(11), 'name' => 'Member', 'slug' => 'member', 'active' => 1
            ],
            [
                // Author
                'hex' => Str::random(11), 'name' => 'Author', 'slug' => 'author', 'active' => 1
            ],
            [
                // Publisher
                'hex' => Str::random(11), 'name' => 'Publisher', 'slug' => 'publisher', 'active' => 1
            ],
            [
                // Administrator
                'hex' => Str::random(11), 'name' => 'Administrator', 'slug' => 'administrator', 'active' => 1
            ],
            [
                // Super Administrator
                'hex' => Str::random(11), 'name' => 'Super Administrator', 'slug' => 'super-administrator', 'active' => 1
            ],
            [
                // Developer
                'hex' => Str::random(11), 'name' => 'Developer', 'slug' => 'developer', 'active' => 1
            ],
            
        ]);
    }
}
