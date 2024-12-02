<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 *     $table->foreignId('person_id')->constrained();
 * $table->enum('status', ['active', 'inactive'])->default('active');
 * $table->timestamp('last_purchase_at')->nullable();
 * $table->decimal('total_purchases', 10, 2)->default(0);
 * $table->timestamps();
 * $table->softDeletes();
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'person_id' => \App\Models\Person::factory(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'last_purchase_at' => $this->faker->dateTimeThisYear(),
            'total_purchases' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
