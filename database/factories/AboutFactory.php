<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\About;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_en' => 'About Us',
            'content_en' => 'Website to sell coffee',
            'title_ar' => 'معلومات عننا',
            'content_ar' => 'موقع لبيع القهوة',
            'created_at' => now(),
        ];
    }
}
