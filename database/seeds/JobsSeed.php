<?php

use Illuminate\Database\Seeder;

class JobsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Job::create([
            'title' => substr(md5(time()), 0, 16),
            'description' => md5(time()),
            'local' => 'São Paulo / SP',
            'title' => substr(md5(time()), 0, 16),
            'remote' => 'no',
            'type' => 3,
            'company_id' => 1,
        ]);
    }
}