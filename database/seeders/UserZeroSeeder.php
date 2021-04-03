<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserZeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([
            'role_id' => 1,
            'name' => "admin",
            'email' => "admin@mail.com"
        ]);
    }
}
