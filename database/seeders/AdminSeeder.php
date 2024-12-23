<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Misael',
            'email' => 'misael@laigsa.com',
            'password' => Hash::make('my-password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ])->assignRole('admin');
    }
}
