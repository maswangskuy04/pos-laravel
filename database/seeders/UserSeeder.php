<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert into user

        User::create([
            'name' => 'Atmin',
            'email' => 'atminngawi@gmail.com',
            'password' => Hash::make('0987654321')
        ]);
    }
}
