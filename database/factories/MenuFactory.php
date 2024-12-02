<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * Schema::create('menus', function (Blueprint $table) {
     * $table->id();
     * $table->string('name');
     * $table->string('slug')->unique();
     * $table->string('icon')->nullable();
     * $table->integer('order')->default(1);
     * $table->foreignId('parent_id')->nullable()->constrained('menus');
     * $table->string('route')->nullable();
     * $table->boolean('is_active')->default(true);
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
            'icon' => $this->faker->word,
            'order' => $this->faker->randomNumber(0),
            'parent_id' => $this->faker->randomNumber(0),
            'route' => $this->faker->word,
            'is_active' => $this->faker->boolean,

        ];
    }
}
