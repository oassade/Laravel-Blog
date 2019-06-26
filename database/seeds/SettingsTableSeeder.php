<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name' => "Laravel Blog",
            'contact_number' => '0631987718',
            'contact_email' => 'oassade@gmail.com',
            'address' => 'Russia, Petersburg',
         ]);
    }
}
