<?php

namespace Database\Factories;

use App\Models\JobPost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class JobPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        return [
            'title' => $title,
            'description' => $this->faker->sentence,
            'company_id' => null,
            'job_type_id' => \App\Models\JobType::get()->random()->id,
            'province_id' => \App\Models\Province::get()->random()->id,
            'slug' => Str::slug($title, '-'),
            'deadline' => $this->faker->dateTimeBetween('now', '+2 months', 'America/Lima'),
            'tag' => $this->faker->randomElement([\App\Models\JobPost::FEATURED, \App\Models\JobPost::URGENT])
        ];
    }
}
