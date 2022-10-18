<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;

    public function definition()
    {

        return [
            'nombre' => $this->faker->word(),
            'marca' => $this->faker->word(),
            'descripcion'=> $this->faker->sentence(20),
            'stock'=> $this->faker->randomDigit(),
        ];
    }
}
