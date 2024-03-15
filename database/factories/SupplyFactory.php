<?php

namespace Database\Factories;

use App\Models\Supply;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supply>
 */
class SupplyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supply::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'supply_name' => $this->faker->sentence(2),
            'supply_price' => $this->faker->randomFloat(2, 1, 100),
            'supply_desc' => $this->faker->paragraph,
            'supply_categ' => $this->faker->word,
            'supply_src' => $this->faker->imageUrl()
        ];
    }
}
