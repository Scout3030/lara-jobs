<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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

        \App\Models\User::factory(1)->create([
            'role_id' => 2,
            'name' => "company",
            'email' => "company@mail.com"
        ])->each(function (\App\Models\User $u) {
            \App\Models\Company::factory(1)->create(['user_id' => $u->id])
                ->each(function (\App\Models\Company $c) {
                \App\Models\JobPost::factory(5)->create([
                    'company_id' => $c->id
                ]);
            });
        });

        \App\Models\User::factory(1)->create([
            'role_id' => 3,
            'name' => "candidate",
            'email' => "candidate@mail.com"
        ])->each(function (\App\Models\User $u) {
            \App\Models\Candidate::factory(1)->create(['user_id' => $u->id]);
        });
    }
}
