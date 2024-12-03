<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendor>
 */
class VendorFactory extends Factory
{
    /**
     * Define the model's default state.
     *Schema::create('vendors', function (Blueprint $table) {
     * $table->id();
     * $table->foreignId('person_id')->constrained();
     * $table->decimal('credit_limit', 8, 2)->default(0);
     * $table->integer('ratting')->default(0);
     * $table->timestamps();
     * $table->softDeletes();
     * });
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'person_id' => Person::factory(),
            'credit_limit' => $this->faker->randomFloat(2, 0, 99999),
            'ratting' => $this->faker->numberBetween(0, 100),
        ];
    }
}
