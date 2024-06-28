<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disposition;
use App\Models\Letter;
use App\Models\User;

class DispositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $letter = Letter::first(); // Mengambil surat pertama dari tabel letters
        $user = User::first(); // Mengambil user pertama dari tabel users

        if ($letter && $user) {
            Disposition::create([
                'to' => 'Syaiful',
                'due_date' => '2024-05-06',
                'content' => 'test',
                'note' => 'test',
                'letter_status' => 3,
                'letter_id' => $letter->id,
                'user_id' => $user->id,
            ]);
        } else {
            echo "No letters or users found in the database. Please seed the letters and users tables first.";
        }
    }
}
