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
            'footer_text' => 'footer_text',
            'social_network' => [
                "facebook" => [
                    "icon" => "facebook",
                    "link" => "www.facebook.com/laravelthewebartisan"
                ],
                "instagram" => [
                    "icon" => "instagram",
                    "link" => "www.instagram.com/laravelthewebartisan"
                ]
            ],
            'phone_number' => '969449655',
            'email' => 'roberth@mail.com',
            'address' => 'address'
        ]);
    }
}
