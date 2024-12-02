<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Schema::create('roles', function (Blueprint $table) {
     * $table->id();
     * $table->string('name');
     * $table->string('description');
     * $table->timestamps();
     * $table->softDeletes();
     * });
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
        ];
    }
}
