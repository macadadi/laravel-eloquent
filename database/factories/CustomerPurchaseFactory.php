<?php

namespace Database\Factories;

use App\Models\CustomerPurchase;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerPurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerPurchase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'method' => $this->faker->randomElement([
                CustomerPurchase::METHOD_CREDIT_CARD,
                CustomerPurchase::METHOD_PAYPAL,
            ]),
            'amount' => $this->faker->randomFloat(2, 10, 200),
        ];
    }
}
