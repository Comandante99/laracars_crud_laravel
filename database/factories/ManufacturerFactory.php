<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manufacturer>
 */
class ManufacturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fakercar = (new \Faker\Factory())::create();
        $fakercar->addProvider(new \Faker\Provider\Fakecar($fakercar));
       
        return [
            'name' => $fakercar->vehicleBrand(),
            'country' => $this->faker->state()
        ];
    }
}
