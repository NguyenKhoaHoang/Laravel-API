<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'name_customer' => fake()->firstName(),
            'phone_customer' => fake()->phoneNumber(),
            'address_customer' => fake()->address(),
            'email_customer' => fake()->unique()->safeEmail(),
            'city_customer' => fake()->city()
        ];
    }
}
