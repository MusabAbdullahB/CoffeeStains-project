<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Banner;

class BannerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'banner_title_1_en' => 'WELCOME TO',
            'banner_title_2_en' => 'CoffeeShop',
            'banner_title_3_en' => '2022',
            'banner_title_1_ar' => 'أهلًا بكم في موقع',
            'banner_title_2_ar' => 'كوفي شوب',
            'banner_title_3_ar' => '2022',
            'created_at' => now(),
        ];
    }
}
