<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            1 => "Admin",
            2 => "Company",
            3 => "Candidate"
        ];
        foreach($roles as $id => $role) {
            \App\Models\Role::factory()->create([
                "name" => $role
            ]);
        }
    }
}
