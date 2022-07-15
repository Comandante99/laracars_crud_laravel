<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'users_id' => $this->faker->numberBetween($min = 1, $max = 50),
            'cars_id' => $this->faker->numberBetween($min = 1, $max = 50),
            'total_amount' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 10000, $max =200000),
            'payment_completed' => $this->faker->numberBetween($min = 0, $max = 1),
            'payment_method' => $fakercar->vehiclePaymentMethod()
        ];
    }
}
