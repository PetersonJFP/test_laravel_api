<?php

use Illuminate\Database\Seeder;

class CompaniesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 30; $i++) { 
            App\Company::create([
                'name' => substr(md5(time()), 0, 16),
                'email' => substr(md5(time()), 0, 16).'@gmail.com',
                'website' => substr(md5(time()), 0, 16).'.com',
                'logo' => substr(md5(time()), 0, 16).'.jpg',
                'password' => bcrypt('secret'),
            ]);
        }
    }
}