<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Admin',
            'description' => 'Administrator',
        ]);

        Role::create([
            'name' => 'Gerente',
            'description' => 'Gerente da empresa',
        ]);

        Role::create([
            'name' => 'Financeiro',
            'description' => 'Pessoas do setor financeiro',
        ]);

        Role::create([
            'name' => 'Vendedor',
            'description' => 'Vendedor da empresa',
        ]);
    }
}
