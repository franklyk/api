<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!User::where('email', 'franklin@email.com')->first()){
            User::create([
                'name' => 'Franklin',
                'email' => 'franklin@email.com',
                'password' => Hash::make('123456a', ['rounds' => 12]),
                'email_verified_at' => now(),
            ]);
        }
        if(!User::where('email', 'franklin2@email.com')->first()){
            User::create([
                'name' => 'Franklin2',
                'email' => 'franklin2@email.com',
                'password' => Hash::make('123456a', ['rounds' => 12]),
                'email_verified_at' => now(),
            ]);
        }
        if(!User::where('email', 'franklin3@email.com')->first()){
            User::create([
                'name' => 'Franklin3',
                'email' => 'franklin3@email.com',
                'password' => Hash::make('123456a', ['rounds' => 12]),
                'email_verified_at' => now(),
            ]);
        }
        if(!User::where('email', 'franklin4@email.com')->first()){
            User::create([
                'name' => 'Franklin4',
                'email' => 'franklin4@email.com',
                'password' => Hash::make('123456a', ['rounds' => 12]),
                'email_verified_at' => now(),
            ]);
        }
    }
}
