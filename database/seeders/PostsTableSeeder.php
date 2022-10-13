<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
		'title' => 'title1',
		'body' => 'body1',
		'created_at' => now(),
        'updated_at' => now(),
        ]);
        
        DB::table('posts')->insert([
		'title' => 'title2',
		'body' => 'body2',
		'created_at' => now(),
        'updated_at' => now(),
        ]);
    }
}
