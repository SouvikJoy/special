<?php

namespace Database\Seeders;

use App\Models\ApiAgent;
use Illuminate\Database\Seeder;

class ApiAgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApiAgent::updateOrCreate([
            'key' => 'r2txSQAHpl76lfig'
        ], [
            'name'      => 'Test Api',
            'secret'    => \Crypt::encryptString('2C6xbw4PKAnUUP8BpNoQiVfAKUCSFpYA'),
            'target'    => 'web',
            'hosts'     => ['nuxt.local.debugger.tech'],
            'active'    => true
        ]);
    }
}
