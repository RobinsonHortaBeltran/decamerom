<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ciudades extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciudades =
            [
                'Barranquilla',
                'Cartagena',
                'Santa marta',
                'Medellin',
                'Bogota',
                'Cancun',
                'Punta cana'
            ];

        foreach ($ciudades as  $value) {
            \DB::table('ciudades')->insert(array(
                'nombre' => $value,
                'state'  => 'activo',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
