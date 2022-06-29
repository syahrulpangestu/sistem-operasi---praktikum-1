<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'id' => 1,
        	'nama_category' => 'Breaking News',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	DB::table('categories')->insert([
        	'id' => 2,
        	'nama_category' => "Education",
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	DB::table('categories')->insert([
        	'id' => 3,
        	'nama_category' => "Preventing",
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
		DB::table('categories')->insert([
        	'id' => 4,
        	'nama_category' => "Update Covid",
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
