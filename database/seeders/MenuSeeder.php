<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'name' => 'Dashboard',
            'slug' => 'dashboard',
            'icon' => 'fas fa-tachometer-alt',
            'order' => 1,
            'parent_id' => null,
            'route' => 'dashboard',
            'is_active' => 1,
        ]);

        Menu::create([
            'name' => 'Produtos',
            'slug' => 'products',
            'icon' => 'fas fa-boxes',
            'order' => 1,
            'parent_id' => null,
            'route' => 'products',
            'is_active' => 1,
        ]);

        Menu::create([
            'name' => 'Grupos',
            'slug' => 'groups',
            'icon' => 'fas fa-boxes',
            'order' => 1,
            'parent_id' => null,
            'route' => 'groups',
            'is_active' => 1,
        ]);
        Menu::create([
            'name' => 'Cargos',
            'slug' => 'roles',
            'icon' => 'fas fa-boxes',
            'order' => 1,
            'parent_id' => null,
            'route' => 'roles',
            'is_active' => 1,
        ]);
        Menu::create([
            'name' => 'Marcas',
            'slug' => 'brands',
            'icon' => 'fas fa-boxes',
            'order' => 1,
            'parent_id' => null,
            'route' => 'brands',
            'is_active' => 1,
        ]);
        Menu::create([
            'name' => 'Clientes',
            'slug' => 'customers',
            'icon' => 'fas fa-users',
            'order' => 1,
            'parent_id' => null,
            'route' => 'customers',
            'is_active' => 1,
        ]);
        Menu::create([
            'name' => 'Fornecedores',
            'slug' => 'vendors',
            'icon' => 'fas fa-users',
            'order' => 1,
            'parent_id' => null,
            'route' => 'vendors',
            'is_active' => 1,
        ]);
        Menu::create([
            'name' => 'Vendedores',
            'slug' => 'sellers',
            'icon' => 'fas fa-users',
            'order' => 1,
            'parent_id' => null,
            'route' => 'sellers',
            'is_active' => 1,
        ]);
        Menu::create([
            'name' => 'Vendas',
            'slug' => 'sales',
            'icon' => 'fas fa-users',
            'order' => 1,
            'parent_id' => null,
            'route' => 'sales',
            'is_active' => 1,
        ]);
    }
}
