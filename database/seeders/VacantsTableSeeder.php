<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VacantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vacants')->delete();
        
        \DB::table('vacants')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2023-03-31 13:44:21',
                'updated_at' => '2023-03-31 14:27:38',
                'author' => 'Karina',
                'title' => 'DBA',
                'city' => 'Bogotá',
                'description' => 'DBA en Oracle',
                'state' => '1',
                'salary' => '4000000',
                'experience' => 'Con mas de 2 años de experiencia en el cargo',
                'num_vacants' => '2',
                'num_aplic' => '2',
                'education' => 'Pregrado',
                'language' => 'Ninguno',
                'availability_travel' => 'no',
                'type_contract' => 'indefinido',
                'type_cv_id' => 2,
                'area' => 'administrativo',
                'filtro' => '3',
              
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2023-03-31 14:35:48',
                'updated_at' => '2023-03-31 14:35:48',
                'author' => 'Karina',
                'title' => 'Analista contable',
                'city' => 'Bogotá',
                'description' => 'Se requirer analista contable con buena actitud',
                'state' => '1',
                'salary' => '2800000',
                'experience' => 'Minimo dos años de experiencia en el cargo',
                'num_vacants' => '2',
                'num_aplic' => '0',
                'education' => 'Pregrado',
                'language' => 'Ninguno',
                'availability_travel' => 'si',
                'type_contract' => 'obra o labor',
                'type_cv_id' => 2,
                'area' => 'administrativo',
                'filtro' => '2',
    
            ),
        ));
        
        
    }
}