<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dbs_72210477')->insert([
            'article_name' => 'lorem',
            'article_date' => '2023-06-08',
            'article_text' => 'ipsum',
        ]);
    }
}
