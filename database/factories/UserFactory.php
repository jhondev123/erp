<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 *
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * $table->foreignId('person_id')->constrained();
     * $table->string('email')->unique();
     * $table->timestamp('last_login_at')->nullable();
     * $table->timestamp('last_login_ip')->nullable();
     * $table->timestamp('email_verified_at')->nullable();
     * $table->string('password');
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $person = \App\Models\Person::factory()->create();
        return [
            'person_id' => $person->id,
            'email' => $person->email,
            'last_login_at' => $this->faker->dateTime(),
            'last_login_ip' => $this->faker->ipv4(),
            'email_verified_at' => now(),
            'password' => static::$password ?: static::$password = Hash::make('password'),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}