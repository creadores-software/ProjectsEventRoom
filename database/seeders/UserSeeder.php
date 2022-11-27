<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Jorge I. Meza',
            'email' => 'jimezam@autonoma.edu.co',
            'email_verified_at' => now(),
            'password' => Hash::make('hola123'),
            'remember_token' => Str::random(10),
        ]);
    }
}
