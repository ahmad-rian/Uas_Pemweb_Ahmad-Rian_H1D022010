<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Administrator',
                'phone' => '082121212121',
                'password' => Hash::make('admin'),
                'role' => Role::ADMIN->status(),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );
    }
}
