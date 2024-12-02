<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *Schema::create('products', function (Blueprint $table) {
     * $table->id();
     * $table->string('name');
     * $table->string('description')->nullable();
     * $table->decimal('price', 10, 2);
     * $table->decimal('cost_price', 10, 2);
     * $table->string('barcode')->nullable();
     * $table->timestamps();
     * $table->softDeletes();
     * });
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'cost_price' => $this->faker->randomFloat(2, 0, 1000),
            'barcode' => $this->faker->ean13,
        ];
    }
}
