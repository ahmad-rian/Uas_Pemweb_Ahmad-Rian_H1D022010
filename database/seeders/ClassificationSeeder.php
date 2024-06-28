<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classification;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $classifications = [
            [
                'code' => 'ADM',
                'type' => 'Administrasi',
                'description' => 'Jenis surat yang berkaitan dengan administrasi'
            ],
            // Tambahkan klasifikasi lainnya di sini
        ];

        foreach ($classifications as $classification) {
            Classification::updateOrCreate(
                ['code' => $classification['code']],
                [
                    'type' => $classification['type'],
                    'description' => $classification['description'],
                ]
            );
        }
    }
}
