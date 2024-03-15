<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
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
            'user_name' => $this->faker->name,
            'user_email' => $this->faker->unique()->safeEmail,
            'user_phone' => $this->faker->phoneNumber,
            'user_houseno' => $this->faker->buildingNumber,
            'user_street' => $this->faker->streetName,
            'user_brgy' => $this->faker->citySuffix,
            'user_city' => $this->faker->city,
            'user_province' => $this->faker->state,
            'user_password' => bcrypt('password'),
            'user_birth' => $this->faker->date(),
            'verification_token' => Str::random(10),
            'is_verified' => false
        ];
    }
}
