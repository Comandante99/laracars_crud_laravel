<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
 

class CarFactory extends Factory
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
            'manufacturers_id' => $this->faker->numberBetween($min = 0, $max = 50),
            'model' => $fakercar->vehicleModel(),
            'year' => $this->faker->biasedNumberBetween(1998,2017, 'sqrt'),
            'engine' => $fakercar->vehicleEnginePower(),
            'price' => $this->faker->biasedNumberBetween(10000,120000, 'sqrt'),
            'discount' => $this->faker->numberBetween($min = 0, $max = 20),
            'transmission' => $fakercar->vehicleGearBoxType,
            'power' => $fakercar->vehicleFuelType(),
            'color' => $this->faker->colorName(),
            'door' => $fakercar->vehicleDoorCount(),
            'properties' => implode(', ', $fakercar->vehicleProperties())
        ];
    }
}

