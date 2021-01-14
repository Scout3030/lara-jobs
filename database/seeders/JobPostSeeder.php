<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\JobPost::factory(100)->create();
    }
}
