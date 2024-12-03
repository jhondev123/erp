<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Configue;
class ConfigueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Configue::create([
            'name' => 'url_images',
            'description' => 'URL base para as imagens',
            'key' => 'url_images',
            'value' => 'http://localhost:8000/images/',
            'is_active' => 1,
        ]);

    }
}
