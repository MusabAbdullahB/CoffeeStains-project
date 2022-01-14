<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Social;

class SocialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Social::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'twitter' => 'twitter.com',
            'facebook' => 'Facebook.com',
            'instagram' => 'instagram.com',
            'created_at' => now(),
        ];
    }
}
