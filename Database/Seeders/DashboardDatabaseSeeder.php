<?php

namespace modules\Dashboard\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DashboardDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();

        \DB::table('dashboard')->insert(array(
            'name' => 'LMS - Laravel',
            'description' => 'It \' Simple',
        ));
    }
}
