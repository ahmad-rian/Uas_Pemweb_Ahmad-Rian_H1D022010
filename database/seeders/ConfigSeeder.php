<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Config;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $configs = [
            ['code' => 'default_password', 'value' => 'admin'],
            ['code' => 'page_size', 'value' => 5],
            ['code' => 'app_name', 'value' => 'Aplikasi Surat Menyurat'],
            ['code' => 'institution_name', 'value' => 'rian'],
            ['code' => 'institution_address', 'value' => 'Jl. mawar'],
            ['code' => 'institution_phone', 'value' => '082123479638'],
            ['code' => 'institution_email', 'value' => 'admin@admin.com'],
            ['code' => 'language', 'value' => 'id'],
            ['code' => 'pic', 'value' => 'ahmad rian'],
        ];

        foreach ($configs as $config) {
            Config::updateOrCreate(
                ['code' => $config['code']],
                ['value' => $config['value']]
            );
        }
    }
}
