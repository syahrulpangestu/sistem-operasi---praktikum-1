<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
        	'id' => 1,
        	'username' => 'Breaking News',
            'password' => 'password',
            'user_id' => 1,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	DB::table('accounts')->insert([
        	'id' => 2,
        	'username' => "Education",
            'password' => 'password',
            'user_id' => 2,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	DB::table('accounts')->insert([
        	'id' => 3,
        	'username' => "Preventing",
            'password' => 'password',
            'user_id' => 3,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
        DB::table('accounts')->insert([
        	'id' => 4,
        	'username' => "Breaking News",
            'password' => 'password',
            'user_id' => 3,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
