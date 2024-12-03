<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = Permission::create([
            'name' => 'Vendas',
            'description' => 'Permissão para vendas',
            'slug' => 'sales',
        ]);
        $roleAdmin = Role::find(1);
        $roleAdmin->permissions()->attach($permission->id);
        $roleGerente = Role::find(2);
        $roleGerente->permissions()->attach($permission->id);
        $roleFinanceiro = Role::find(3);
        $roleFinanceiro->permissions()->attach($permission->id);
    }
}
