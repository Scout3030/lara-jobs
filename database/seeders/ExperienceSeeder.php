<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiences = [
            1 => "None",
            2 => "6 months",
            3 => "1 year",
            4 => "1+ year",
            5 => "2+ years",
            6 => "3+ years",
            7 => "4+ years",
            8 => "5+ years",
            9 => "6+ years",
            10 => "7+ years"
        ];
        foreach($experiences as $id => $experience) {
            \App\Models\Experience::factory()->create([
                "name" => $experience
            ]);
        }
    }
}
