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

        Storage::deleteDirectory('companies');
        Storage::makeDirectory('companies');

        Storage::deleteDirectory('users');
        Storage::makeDirectory('users');

//        $this->call([
//            TechnologySeeder::class,
//            GeneralDataSeeder::class,
//            CurrencySeeder::class,
//            ExperienceSeeder::class,
//            CountrySeeder::class,
//            DepartmentSeeder::class,
//            ProvinceSeeder::class,
//            JobTypeSeeder::class,
//            RoleSeeder::class,
//            UserSeeder::class,
//            JobPostSeeder::class
//        ]);

        $this->call([
            TechnologySeeder::class,
            GeneralDataSeeder::class,
            CurrencySeeder::class,
            ExperienceSeeder::class,
            JobTypeSeeder::class,
            RoleSeeder::class,
            UserZeroSeeder::class,
        ]);
    }
}
