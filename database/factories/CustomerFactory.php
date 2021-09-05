<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'full_name'=> $this->faker->text(7),
            'address'=> $this->faker->text(10),
            'co_latitude'=> $this->faker->numberBetween(1.5, 5.7),
            'co_longitude'=> $this->faker->numberBetween(1.5, 5.7),
            'contact_no'=>  $this->faker->numberBetween(1, 1000),


        ];
    }
}
