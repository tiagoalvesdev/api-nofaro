<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendances')->insert([
        	'id_pet'			=> 3,
        	'date_attendance'	=> '2020-10-01',
        	'description' 		=> 'Consulta Periódica',
        	'created_at'    	=> now(),
            'updated_at'    	=> now()
        ]);

        DB::table('attendances')->insert([
        	'id_pet'			=> 1,
        	'date_attendance'	=> '2020-10-03',
        	'description' 		=> 'Vacina 123',
        	'created_at'    	=> now(),
            'updated_at'    	=> now()
        ]);

        DB::table('attendances')->insert([
        	'id_pet'			=> 2,
        	'date_attendance'	=> '2020-10-05',
        	'description'		=> 'Retirada de Pontos',
        	'created_at'    	=> now(),
            'updated_at'    	=> now()
        ]);
    }
}
