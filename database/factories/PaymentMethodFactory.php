<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentMethod>
 */
class PaymentMethodFactory extends Factory
{
    /**
     * Define the model's default state.
     *Schema::create('payment_methods', function (Blueprint $table) {
     * $table->id();
     * $table->string('name');
     * $table->string('description')->nullable();
     * $table->boolean('is_active')->default(true);
     * $table->decimal('fee', 8, 2)->default(0);
     * $table->softDeletes();
     * $table->timestamps();
     * });
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'is_active' => $this->faker->boolean,
            'fee' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
