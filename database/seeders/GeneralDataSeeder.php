<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneralDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\GeneralData::factory()->create([
            'logo' => 'logo.png',
            'footer_text' => 'El lugar para trabajos en Laravel',
            'social_network' => [
                "facebook" => [
                    "icon" => "facebook",
                    "link" => "https://www.facebook.com/laravelthewebartisan"
                ],
                "instagram" => [
                    "icon" => "instagram",
                    "link" => "https://www.instagram.com/laravelthewebartisan"
                ]
            ],
            'phone_number' => '969449655',
            'email' => 'admin@laravelthewebartisan.com',
            'address' => 'Lima, Perú'
        ]);
    }
}
