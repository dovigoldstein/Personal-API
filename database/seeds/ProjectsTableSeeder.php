<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name' => 'Personal API',
                'url' => 'http://api.dovi-goldstein.local',
                'description' => 'APi with resume info. Using Json API, PHP/Laravel',
                'created_at' => NOW()
            ],
            [
                'name' => 'React Maps',
                'url' => 'reactmaps.com',
                'description' => 'Google maps clone. Using React, Bootstrap and react-google-maps library',
                'created_at' => NOW()
            ]
        ]);
    
    }
}
