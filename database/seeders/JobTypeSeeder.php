<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobTypes = [
            1 => "Full Time",
            2 => "Part Time",
            3 => "Contract",
            4 => "Internship",
            5 => "Office"
        ];
        foreach($jobTypes as $id => $jobType) {
            \App\Models\JobType::factory()->create([
                'name' => $jobType
            ]);
        }
    }
}
