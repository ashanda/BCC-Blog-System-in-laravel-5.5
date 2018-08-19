<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          \App\Setting::create([
            'site_name' => "BCC Community ",
            'site_description' => 'mac ta vish',
            'address' => 'Badulla',
            'contact_number' => '078 7200877',
            'contact_email' => 'lucianmacwolf@gmail.com'
        ]);
    }
}
