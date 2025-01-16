<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

<<<<<<< HEAD
=======

>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
<<<<<<< HEAD
            'name' => 'UserA',
            'email' => 'usera@example.com',
            'password' => Hash::make('usera'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'UserB',
            'email' => 'userb@example.com',
            'password' => Hash::make('userb'),
        ]);
=======
             'name' => 'UserA',
             'email' => 'usera@example.com',
             'password' => Hash::make('usera'),
        ]);
        \App\Models\User::factory()->create([
             'name' => 'UserB',
             'email' => 'userb@example.com',
             'password' => Hash::make('userb'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'paulo',
            'email' => 'useraa@example.com',
            'password' => Hash::make('123'),
       ]);
            
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
    }
}
