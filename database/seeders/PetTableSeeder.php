<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
        	'name' 			=> 'Amora',
        	'species' 		=> 'C',
        	'created_at'    => now(),
            'updated_at'    => now()
        ]);

        DB::table('pets')->insert([
        	'name' 			=> 'Chloe',
        	'species' 		=> 'G',
        	'created_at'    => now(),
            'updated_at'    => now()
        ]);

        DB::table('pets')->insert([
        	'name' 			=> 'Surya',
        	'species' 		=> 'C',
        	'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
