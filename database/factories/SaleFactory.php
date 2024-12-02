<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *Schema::create('sales', function (Blueprint $table) {
     * $table->id();
     * $table->foreignId('seller_id')->constrained();
     * $table->foreignId('customer_id')->constrained();
     * $table->foreignId('payment_method_id')->constrained();
     * $table->enum('status', ['pending', 'completed', 'canceled'])->default('pending');
     * $table->decimal('total', 8, 2);
     * $table->decimal('discount', 8, 2)->default(0);
     * $table->timestamp('sale_date')->useCurrent();
     * $table->softDeletes();
     * $table->timestamps();
     * });
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'seller_id' => \App\Models\Seller::factory(),
            'customer_id' => \App\Models\Customer::factory(),
            'payment_method_id' => \App\Models\PaymentMethod::factory(),
            'status' => $this->faker->randomElement(['pending', 'completed', 'canceled']),
            'total' => $this->faker->randomFloat(2, 0, 999999),
            'discount' => $this->faker->randomFloat(2, 0, 999999),
            'sale_date' => $this->faker->dateTime(),
        ];
    }
}
