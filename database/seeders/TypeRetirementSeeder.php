<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeRetirement;

class TypeRetirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
            'description' => 'ABANDONO DE CARGO'
            ],
            [
            'description' => 'LIQUIDACIÓN / REINTEGRO'
            ],
            [
            'description' => 'JUSTA CAUSA'
            ],
            [
            'description' => 'NO REINTEGRO'
            ],
            [
            'description' => 'PERIODO DE PRUEBA'
            ],
            [
            'description' => 'REDUCCIÓN PLANTA'
            ],
            [
            'description' => 'RENUNCIA VOLUNTARIA'
            ],
            [
            'description' => 'TERMINACIÓN CONTRATO'
            ],
            [
            'description' => 'TERMINACIÓN TEMPORADA'
            ]
        ];
        foreach ($data as $retiros) {
            TypeRetirement::create($retiros);
        }
    }
}
