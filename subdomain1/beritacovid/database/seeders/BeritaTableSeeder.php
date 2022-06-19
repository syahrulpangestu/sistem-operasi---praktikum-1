<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beritas')->insert([
        	'id' => 2,
        	'judul' => 'Lorem Ipsum',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia semper urna a semper. Mauris sollicitudin varius purus, ut mollis eros sollicitudin vel.',
            'user_id' => 2,
            'category_id' => 3,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	DB::table('beritas')->insert([
        	'id' => 3,
        	'judul' => "Lorem Ipsum",
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia semper urna a semper. Mauris sollicitudin varius purus, ut mollis eros sollicitudin vel.',
            'user_id' => 3,
            'category_id' => 2,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	DB::table('beritas')->insert([
        	'id' => 4,
        	'judul' => "Lorem Ipsum",
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia semper urna a semper. Mauris sollicitudin varius purus, ut mollis eros sollicitudin vel.',
            'user_id' => 4,
            'category_id' => 4,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
