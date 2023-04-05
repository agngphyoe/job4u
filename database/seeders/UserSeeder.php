<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@successhunt.com',
            'phone' => '09450032449',
            'password' => Hash::make(12345678),
            'image' => 'admin.jpeg',
            'image_url' => 'http://127.0.0.1:8000/assets/images/admin/admin.jpeg',
        ]);
    }
}
