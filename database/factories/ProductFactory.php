<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_en' => $this->faker->country(). ' ' .'Coffee',
            'name_ar' => 'قهوة',
            'price' => $this->faker->numberBetween($min = 50, $max = 150),
            'category' => $this->faker->numberBetween($min = 1, $max = 3),
            'availability' => '1',
            'product_image' => 'NULL',
            'date_added' => now(),
            'created_at' => now(),
        ];
    }
}
