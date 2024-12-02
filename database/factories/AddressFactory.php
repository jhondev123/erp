<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Schema::create('addresses', function (Blueprint $table) {
     * $table->id();
     * $table->foreignId('person_id')->constrained();
     * $table->string('street');
     * $table->string('number');
     * $table->string('complement')->nullable();
     * $table->string('neighborhood');
     * $table->string('city');
     * $table->string('state');
     * $table->string('country');
     * $table->string('zip_code');
     * $table->timestamps();
     * $table->softDeletes();
     * });
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $person = Person::factory()->create();
        return [
            'person_id' => $person->id,
            'street' => $this->faker->streetName,
            'number' => $this->faker->buildingNumber,
            'complement' => $this->faker->secondaryAddress,
            'neighborhood' => $this->faker->citySuffix,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'zip_code' => $this->faker->postcode,
        ];
    }
}
