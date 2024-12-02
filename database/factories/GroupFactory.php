<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *Schema::create('groups', function (Blueprint $table) {
     * $table->id();
     * $table->string('name');
     * $table->string('description')->nullable();
     * $table->integer('total_members')->default(0);
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
            'total_members' => $this->faker->numberBetween(0, 100),
        ];
    }
}
