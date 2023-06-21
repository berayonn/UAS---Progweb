<?php

use Illuminate\Database\Seeder;

class UASSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dbs72210477')->insert([
            'article_name' => 'dia',
            'article_date' => '2023-10-23',
            'article_text' => 'fragma',
        ]);
    }
}
