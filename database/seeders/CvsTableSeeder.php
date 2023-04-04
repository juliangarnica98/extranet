<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CvsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cvs')->delete();
        
        \DB::table('cvs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2023-03-31 14:22:11',
                'updated_at' => '2023-03-31 14:22:11',
                'name' => 'Julian',
                'type_id' => 'CC',
                'num_id' => '1070308098',
                'num_cell' => '3014472784',
                'num_cell2' => '3124893573',
                'age' => '24',
                'email' => 'juliang1012@gmail.com',
                'address' => 'ca',
                'city_address' => 'Zipaquira',
                'academic_profile' => 'Pregrado',
                'name_last_company' => 'net',
                'position_last_company' => 'desarrollador',
                'funtion_last_company' => 'desallorro',
                'work_last_company' => 'No',
                'date_init_company' => '2022-02-06',
                'date_finally_company' => '2022-06-08',
                'name_last_company2' => 'dracp',
                'position_last_company2' => 'desarrollador',
                'funtion_last_company2' => 'desarrollo',
                'date_init_company2' => '2022-12-12',
                'date_finally_company2' => '2022-12-20',
                'family' => 'Si',
                'like_to_work' => 'Es una empresa reconocida',
                'previously_work' => 'No',
                'should_choose' => 'Me gusta el trabajo',
                'shirt_size' => 'm',
                'pant_size' => '30',
                'shoes_size' => '40',
                'state_job_vacante' => '1',
                'pruebas' => NULL,
                'vacant_id' => 1,
                'type' => 2,
                'area' => '3',
                'state_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2023-03-31 14:27:38',
                'updated_at' => '2023-03-31 14:27:38',
                'name' => 'Luisa',
                'type_id' => 'CC',
                'num_id' => '1070307595',
                'num_cell' => '3123217676',
                'num_cell2' => '3207841010',
                'age' => '25',
                'email' => 'luisafg2710@hotmail.com',
                'address' => 'calee 333',
                'city_address' => 'Zipaquira',
                'academic_profile' => 'Pregrado',
                'name_last_company' => 'belcorp',
                'position_last_company' => 'analista',
                'funtion_last_company' => 'analisis',
                'work_last_company' => 'No',
                'date_init_company' => '2020-12-12',
                'date_finally_company' => '2021-10-20',
                'name_last_company2' => 'otra',
                'position_last_company2' => 'analisis',
                'funtion_last_company2' => 'analsis',
                'date_init_company2' => '2022-12-12',
                'date_finally_company2' => '2023-02-10',
                'family' => 'No',
                'like_to_work' => 'Me parece una empresa buena',
                'previously_work' => 'No',
                'should_choose' => 'Soy responsable',
                'shirt_size' => 's',
                'pant_size' => '12',
                'shoes_size' => '39',
                'state_job_vacante' => '1',
                'pruebas' => NULL,
                'vacant_id' => 1,
                'type' => 2,
                'area' => '3',
                'state_id' => 1,
            ),
        ));
        
        
    }
}