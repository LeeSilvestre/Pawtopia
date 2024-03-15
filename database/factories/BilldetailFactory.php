<?php

namespace Database\Factories;

use App\Models\Billdetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Billdetail>
 */
class BilldetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Billdetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bill_id' => null, 
            'supply_id' => null, 
            'item_qty' => $this->faker->numberBetween(1, 10) 
        ];
    }
}
