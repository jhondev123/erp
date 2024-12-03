<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;
class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentMethod::create([
            'name' => 'Crédito',
            'description' => 'Pagamento com cartão de crédito',
            'is_active' => 1,
            'fee' => '1.5'
        ]);
        PaymentMethod::create([
            'name' => 'Débito',
            'description' => 'Pagamento com cartão de débito',
            'is_active' => 1,
            'fee' => '0'
        ]);
        PaymentMethod::create([
            'name' => 'Boleto',
            'description' => 'Pagamento com boleto bancário',
            'is_active' => 1,
            'fee' => '0'
        ]);
        PaymentMethod::create([
            'name' => 'Pix',
            'description' => 'Pagamento com Pix',
            'is_active' => 1,
            'fee' => '0'
        ]);

    }
}
