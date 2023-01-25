<?php

namespace Database\Seeders;

use App\Models\Gerencia;
use Illuminate\Database\Seeder;

class GerenciaSeeder extends Seeder
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
            'description' => 'ESTABILIDAD LABORAL'
            ],
            [
            'description' => 'GERENCIA COMERCIAL'
            ]
            ,[
            'description' => 'GERENCIA DE EXPANSION Y VISUAL MERCHANDISING'
            ]
            ,[
            'description' => 'GERENCIA DE GESTION HUMANA'
            ],
            [
            'description' => 'GERENCIA DE MERCADEO Y PRODUCTO'
            ],
            [
            'description' => 'GERENCIA DE OPERACIONES'
            ],
            [
            'description' => 'GERENCIA FINANCIERA'
            ],
            [
            'description' => 'GERENCIA GENERAL'
            ],
            [
            'description' => 'GERENCIA UNIQUE'
            ],
            [
            'description' => 'OTROS'
            ],

        ];
        foreach ($data as $areas) {
            Gerencia::create($areas);
        }
    }
}
