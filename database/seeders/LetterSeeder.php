<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Letter;
use App\Models\User;

class LetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $user = User::first(); // Mengambil user pertama dari tabel users

        if ($user) {
            Letter::updateOrCreate(
                ['reference_number' => '9863146119125'],
                [
                    'agenda_number' => '2968',
                    'from' => 'Ahmad Rian',
                    'to' => 'Purbalingga',
                    'letter_date' => '2024-06-05',
                    'received_date' => '2024-06-27',
                    'description' => 'test',
                    'note' => 'test',
                    'type' => 'incoming',
                    'classification_code' => 'ADM',
                    'user_id' => $user->id,
                ]
            );
        } else {
            echo "No users found in the database. Please seed the users table first.";
        }
    }
}
