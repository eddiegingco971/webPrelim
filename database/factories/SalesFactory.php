<?php

namespace Database\Factories;

use App\Models\Sales;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sales::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Wholesale_qty' => $this->faker->randomDigitNotNull,
        'Description' => $this->faker->word,
        'Product_id' => $this->faker->word,
        'Price_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
