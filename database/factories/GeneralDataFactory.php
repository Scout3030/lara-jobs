<?php

namespace Database\Factories;

use App\Models\GeneralData;
use Illuminate\Database\Eloquent\Factories\Factory;

class GeneralDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GeneralData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo' => $this->faker->word,
            'footer_text' => $this->faker->word,
            'social_network' => $this->faker->word,
            'phone_number' => $this->faker->word,
            'email' => $this->faker->word,
            'address' => $this->faker->word
        ];
    }
}
