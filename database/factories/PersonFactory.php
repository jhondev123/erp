<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     * $table->string('fullname');
     * $table->string('email');
     * $table->string('document_number')->unique();
     * $table->string('birthdate')->nullable();
     * $table->enum('type',['physical','juridical'])->default('physical');
     * $table->enum('status',['active','inactive'])->default('active');
     * $table->string('photo')->nullable();
     * $table->string('phone')->nullable();
     * $table->string('cellphone')->nullable();
     * $table->text('notes')->nullable();
     */
    public function definition(): array
    {
        return [
            'fullname' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'document_number' => $this->faker->unique()->numerify('###########'),
            'birthdate' => $this->faker->date(),
            'type' => $this->faker->randomElement(['physical','juridical']),
            'status' => $this->faker->randomElement(['active','inactive']),
            'photo' => $this->faker->imageUrl(),
            'phone' => $this->faker->phoneNumber(),
            'cellphone' => $this->faker->phoneNumber(),
            'notes' => $this->faker->text(),

        ];
    }
}
