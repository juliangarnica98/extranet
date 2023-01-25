<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $data=[
                [
                'description' => 'Llamada inicial '
                ],
                [
                'description' => 'Pruebas psicotécnicas '
                ],
                [
                'description' => 'Pruebas técnicas '
                ],
                [
                'description' => 'Entrevista Analista GH '
                ],
                [
                'description' => 'Entrevista Jefe Directo '
                ],
                [
                'description' => 'Entrevista Gerente GH'
                ],
                [
                'description' => 'Poligrafía y Visita'
                ],
                [
                'description' => 'Exámenes médicos '
                ],
                [
                'description' => 'Contratado'
                ],
                [
                'description' => 'Descartado'
                ],
                                                                
                ];
                foreach ($data as $regiones) {
                    State::create($regiones);
                }
                    
        }
    }
}
