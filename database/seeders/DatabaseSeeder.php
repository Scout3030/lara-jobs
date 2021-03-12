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
        Storage::deleteDirectory('companies');
        Storage::makeDirectory('companies');

        Storage::deleteDirectory('users');
        Storage::makeDirectory('users');

        $this->call([
            GeneralDataSeeder::class,
            CurrencySeeder::class,
            CountrySeeder::class,
            DepartmentSeeder::class,
            ProvinceSeeder::class,
            JobTypeSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            JobPostSeeder::class
        ]);
    }
}
