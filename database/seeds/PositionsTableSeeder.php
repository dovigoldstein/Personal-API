<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'role' => 'Counselor and Waiter',
                'employer' => 'Camp Simcha',
                'location' => 'Glen Spey, NY',
                'employment_type' => 'volunteer',
                'from_date' => '2007-07-01',
                'to_date' => '2008-08-01',
                'created_at' => NOW()
            ],
            [
                'role' => 'Mentor',
                'employer' => 'Oorah',
                'location' => 'Gilboa, NY',
                'employment_type' => 'volunteer',
                'from_date' => '2007-07-01',
                'to_date' => '2008-08-01',
                'created_at' => NOW()
            ],
            [
                'role' => 'Tutor',
                'employer' => 'Yeshiva Mekor Hatorah',
                'location' => 'Lakewood, NJ',
                'employment_type' => 'part-time',
                'from_date' => '2016-05-01',
                'to_date' => '2016-07-01',
                'created_at' => NOW()
            ],
            [
                'role' => 'Tutor',
                'employer' => 'Yeshiva Ohr Moshe',
                'location' => 'Lakewood, NJ',
                'employment_type' => 'part-time',
                'from_date' => '2016-09-01',
                'to_date' => '2018-03-01',
                'created_at' => NOW()
            ],
            [
                'role' => 'Intern',
                'employer' => 'Bitbean',
                'location' => 'Lakewood, NJ',
                'employment_type' => 'internship',
                'from_date' => '2018-05-15',
                'to_date' => '2099-12-31',
                'created_at' => NOW()
            ]
        ]);
    }
}
