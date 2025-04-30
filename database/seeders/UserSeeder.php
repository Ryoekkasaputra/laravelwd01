<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nama' => 'yahya',
            'no_hp' => '08123456789',
            'email' => 'yahya@example.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);

        User::create([
            'nama' => 'Alif',
            'no_hp' => '08123456788',
            'email' => 'alif@example.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);
    }
}
