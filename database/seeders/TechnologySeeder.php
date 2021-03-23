<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            1 => "Docker",
            2 => "Node.js",
            3 => "Vue.js",
            4 => "CSS",
            5 => "HTML",
            6 => "Redis",
            7 => "MongoDB",
            8 => "Mysql",
            9 => "API rest",
            10 => "Ecommerce",
            11 => "Ubuntu",
            12 => "AWS"
        ];
        foreach($technologies as $id => $technology) {
            \App\Models\Technology::factory()->create([
                "name" => $technology
            ]);
        }
    }
}
