<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('empleados')->insert([
            [
                'nombres'   => 'Alex G',
                'apellidos' => 'Gutierrez',
                'domicilio' => 'Av. los metales 333',
                'dni'       =>  12345678,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nombres'   => 'Raquel',
                'apellidos' => 'San mIguel',
                'domicilio' => 'manuela beltran 333',
                'dni'       =>  12345670,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
