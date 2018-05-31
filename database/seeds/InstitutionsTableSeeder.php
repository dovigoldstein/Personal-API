<?php

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([
            [
                'name' => 'Yeshivas HaGram',
                'location' => 'Jerusalem, Israel',
                'education_type' => 'Talmudic Law',
                'from_date' => '2010-11-01',
                'to_date' => '2011-07-01',
                'created_at' => NOW()
            ],
            [
                'name' => 'Mir Yeshiva',
                'location' => 'Jerusalem, Israel',
                'education_type' => 'Talmudic Law',
                'from_date' => '2012-10-01',
                'to_date' => '2014-07-01',
                'created_at' => NOW()
            ],
            [
                'name' => 'The School of Evolving Technologies',
                'location' => 'Lakewood, NJ',
                'education_type' => 'Software and Web Development',
                'from_date' => '2016-09-01',
                'to_date' => '2018-03-01',
                'created_at' => NOW()
            ]
        ]);
    }
}
