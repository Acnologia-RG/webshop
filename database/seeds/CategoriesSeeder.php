<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'food',
            'created_at' => Carbon::now()
            
        ]);

        DB::table('categories')->insert([
            'category_name' => 'games',
            'created_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'category_name' => 'drinks',
            'created_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'category_name' => 'movies/series',
            'created_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'category_name' => 'comics',
            'created_at' => Carbon::now()
        ]);
    }
}
