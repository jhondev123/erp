<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Permission>
 */
class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *Schema::create('permissions', function (Blueprint $table) {
     * $table->id();
     * $table->string('name');
     * $table->string('slug')->unique();
     * $table->string('description')->nullable();
     * $table->timestamps();
     * $table->softDeletes();
     * });
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->text,
        ];
    }
}
