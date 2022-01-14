<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;
use Illuminate\Support\Str;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address_en' => 'Saudi Arabia',
            'address_ar' => 'المملكة العربية السعودية',
            'phone_number' => $this->faker->numerify('+966 5## ### ###'),
            'email' => $this->faker->unique()->safeEmail(),
            'created_at' => now(),
        ];
    }
}
