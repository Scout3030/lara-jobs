<?php

namespace Database\Factories;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Factories\Factory;

class CandidateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => null,
            'title' => $this->faker->jobTitle,
            'salary' => $this->faker->randomNumber(4, false),
            'working_experience' => $this->faker->text,
            'education' => $this->faker->text,
            'languages' => $this->faker->text,
            'skills' => $this->faker->text,
            'resume' => $this->faker->text,
        ];
    }
}
