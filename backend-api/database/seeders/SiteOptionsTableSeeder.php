<?php

namespace Database\Seeders;

use App\Models\SiteOption;
use Illuminate\Database\Seeder;

class SiteOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteOption::updateOrCreate([
            'name'      => 'app-name'
        ], [
            'content' => 'NuxtJs',
            'type'    => 'text'
        ]);

        SiteOption::updateOrCreate([
            'name'      => 'app-logo'
        ], [
            'content' => 'logo',
            'type'    => 'array'
        ]);

        SiteOption::updateOrCreate([
            'name'      => 'app-description'
        ], [
            'content' => 'description',
            'type'    => 'text'
        ]);

        SiteOption::updateOrCreate([
            'name'      => 'app-brief'
        ], [
            'content' => 'brief',
            'type'    => 'text'
        ]);

        SiteOption::updateOrCreate([
            'name'      => 'app-address'
        ], [
            'content' => 'address',
            'type'    => 'array'
        ]);

        SiteOption::updateOrCreate([
            'name'      => 'app-telephone'
        ], [
            'content' => 'telephone',
            'type'    => 'text'
        ]);
    }
}
