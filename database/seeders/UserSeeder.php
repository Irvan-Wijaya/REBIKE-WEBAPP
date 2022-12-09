<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'aradhanaid',
            'name' => 'Aradhana Indra Daniswara',
            'email' => 'aradhanaindradev@gmail.com',
            'password' => bcrypt('password'),
            'image' => 'image.jpg'
        ]);
    }
}
