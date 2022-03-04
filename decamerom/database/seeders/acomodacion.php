<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class acomodacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $acomodacion =
            [
                'SENCILLA',
                'DOBLE',
                'TRIPLE',
                'CUADRUPLE',

            ];

        foreach ($acomodacion as  $value) {
            \DB::table('acomodacion')->insert(array(
                'nombre' => $value,
                'state'  => 'activo',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
