<?php

namespace Database\Factories;

use App\Models\Billstatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Billstatus>
 */
class BillstatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Billstatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => null,
            'bill_when' => now(),
            'bill_method' => $this->faker->randomElement(['Cash', 'GCash']),
            'bill_total' => $this->faker->randomFloat(2, 10, 500),
            'bill_paid' => 0, 
            'bill_status' => 1,
        ];
    }
}
