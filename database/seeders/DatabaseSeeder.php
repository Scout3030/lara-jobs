<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        Storage::deleteDirectory('categories');
//        Storage::makeDirectory('categories');
//        $this->call(UserSeeder::class);
//
//        $this->call(UserSeeder::class);
//
//        Storage::deleteDirectory('courses');
//        Storage::makeDirectory('courses');
//        $this->call(CourseSeeder::class);
//
        Storage::deleteDirectory('users');
        Storage::makeDirectory('users');

        $this->call([
            JobTypeSeeder::class,
            RoleSeeder::class,
            UserSeeder::class
        ]);


    }
}
