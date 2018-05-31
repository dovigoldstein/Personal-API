<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'name' => 'HTML',
                'created_at' => NOW()
            ],
            [
                'name' => 'CSS',
                'created_at' => NOW()
            ],
            [
                'name' => 'JavaScript',
                'created_at' => NOW()
            ],
            [
                'name' => 'Ajax',
                'created_at' => NOW()
            ],
            [
                'name' => 'JQuery',
                'created_at' => NOW()
            ],
            [
                'name' => 'React',
                'created_at' => NOW()
            ],
            [
                'name' => 'AngularJS',
                'created_at' => NOW()
            ],
            [
                'name' => 'Node.js',
                'created_at' => NOW()
            ],
            [
                'name' => 'Express.js',
                'created_at' => NOW()
            ],
            [
                'name' => 'MySQL',
                'created_at' => NOW()
            ],
            [
                'name' => 'MongoDB',
                'created_at' => NOW()
            ],
            [
                'name' => 'PHP',
                'created_at' => NOW()
            ],
            [
                'name' => 'Laravel',
                'created_at' => NOW()
            ],
            [
                'name' => 'Java',
                'created_at' => NOW()
            ],
            [
                'name' => 'Bootstrap',
                'created_at' => NOW()
            ]
        ]);
    }
}
