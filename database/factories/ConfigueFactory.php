<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Configue>
 */
class ConfigueFactory extends Factory
{
    /**
     * Define the model's default state.
     *public function up(): void
     * {
     * Schema::create('configues', function (Blueprint $table) {
     * $table->id();
     * $table->string('name');
     * $table->string('description')->nullable();
     * $table->string('key');
     * $table->string('value');
     * $table->boolean('is_active')->default(true);
     * $table->softDeletes();
     * $table->timestamps();
     * });
     * }
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'key' => $this->faker->word,
            'value' => $this->faker->word,
            'is_active' => $this->faker->boolean,
        ];
    }
}
