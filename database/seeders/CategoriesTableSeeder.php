<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
		'name' => 'category1',
		'created_at' => now(),
        'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
		'name' => 'category2',
		'created_at' => now(),
        'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
		'name' => 'category3',
		'created_at' => now(),
        'updated_at' => now(),
        ]);
    }
}
