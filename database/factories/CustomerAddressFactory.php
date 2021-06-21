<?php

namespace Database\Factories;

use App\Models\CustomerAddress;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->stateAbbr(),
            'zip'=> $this->faker->postcode(),
         
        ];
    }
}
