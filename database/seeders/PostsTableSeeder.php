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
		'body' => 'This is body1.',
		'created_at' => now(),
        'updated_at' => now(),
        'category_id' => 3
        ]);
        
        DB::table('posts')->insert([
		'title' => 'title2',
		'body' => 'This is body2.',
		'created_at' => now(),
        'updated_at' => now(),
        'category_id' => 2
        ]);
        
        DB::table('posts')->insert([
		'title' => 'title3',
		'body' => 'This is body3.',
		'created_at' => now(),
        'updated_at' => now(),
        'category_id' => 1
        ]);
        
        DB::table('posts')->insert([
		'title' => 'title4',
		'body' => 'This is body4.',
		'created_at' => now(),
        'updated_at' => now(),
        'category_id' => 2
        ]);
    }
}
