<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
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
                'type_job' =>  '1',
                'description' => 'Auxiliar de centro de distribución',
                'location' => 'Bogotá cll 196 con auto norte',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '1',
                'description' => 'Auxiliar de centro de distribución',
                'location' => 'Siberia parque siemens',
                'time'=>'',
                'state'=>1
            ],



            [
                'type_job' =>  '2',
                'description' => 'Jefe de selección',
                'location' => 'Bogotá',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Analista de selección',
                'location' => 'Bogotá',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Especialista de comunicaciones',
                'location' => 'Bogotá',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Analista de contabilidad',
                'location' => 'Bogotá',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Analista de finanzas',
                'location' => 'Bogotá',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Auxiliar Administrativo',
                'location' => 'Bogotá',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Auxiliar de inventario',
                'location' => 'Bogotá',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Manager  comercial',
                'location' => 'Bogotá',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Coordinador de CRM',
                'location' => '',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Desarrollador de aplicaciones',
                'location' => '',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Auxiliar de Visual Merchandising',
                'location' => 'Ibagué- Santamarta',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Coordinador de planeación',
                'location' => 'Bogotá',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Analista de selección y formación',
                'location' => 'Siberia',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Fotógrafo',
                'location' => 'Bogotá',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '2',
                'description' => 'Auxiliar de contabilidad',
                'location' => 'Bogotá',
                'time'=>'',
                'state'=>1
            ],


            [
                'type_job' =>  '3',
                'description' => 'Asesor de ventas',
                'location' => 'Tiendas a nivel nacional',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '3',
                'description' => 'Mercaderista ',
                'location' => 'Canal tradicional y grandes superficial a nivel nal',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '3',
                'description' => 'Auxiliar integral',
                'location' => 'Bodegas de nuestras tiendas a nivel nacional',
                'time'=>'',
                'state'=>1
            ],
            [
                'type_job' =>  '3',
                'description' => 'Lider de tienda ',
                'location' => 'Tiendas a nivel nacional',
                'time'=>'',
                'state'=>1
            ],
        ];
        foreach ($data as $datas) {
            Job::create($datas);
        }
    }
}
