<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'id' => 2,
        	'nama' => 'Pangestu Cihuy',
            'nim' => '202010370311299',
            'jurusan' => 'Informatika',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	DB::table('users')->insert([
        	'id' => 3,
        	'nama' => 'Putri Party',
            'nim' => '202010370311299',
            'jurusan' => 'Informatika',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	DB::table('users')->insert([
        	'id' => 4,
        	'nama' => 'Cihuy Laravel',
            'nim' => '202010370311299',
            'jurusan' => 'Informatika',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
