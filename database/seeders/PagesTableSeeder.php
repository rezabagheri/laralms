<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(
            [
            [
                'title' => 'Home',
                'slug' => 'home',
                'content' => 'This Page is Home Page'
            ],
            [
                'title' => 'blog',
                'slug' => 'blog',
                'content' => 'This Page is Blog  Page'
            ],
            [
                'title' => 'About',
                'slug' => 'about',
                'content' => 'This Page is About Page'
            ],

            [
                'title' => 'Contact',
                'slug' => 'contact',
                'content' => 'This Page is Contact Page'
            ],

        ]);
    }
}
