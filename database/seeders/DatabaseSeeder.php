<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Customer;
use App\Models\Group;
use App\Models\Product;
use App\Models\Seller;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vendor;
use Database\Factories\SellerFactory;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DocumentTypeSeeder::class,
            ConfigueSeeder::class,
            RoleSeeder::class,
            MenuSeeder::class,
            PaymentMethodSeeder::class,
            PermissionSeeder::class,
            UserSeeder::class,
        ]);
        Brand::factory(10)->create();
        Customer::factory(10)->create();
        Group::factory(10)->create();
        Vendor::factory(10)->create();
        Seller::factory(10)->create();
        Product::factory(10)->create();
    }
}
