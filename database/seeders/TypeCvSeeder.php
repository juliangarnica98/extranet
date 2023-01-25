<?php

namespace Database\Seeders;

use App\Models\Type_cv;
use Illuminate\Database\Seeder;

class TypeCvSeeder extends Seeder
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
                'description' => 'Reemplazo'
                ],
                [
                'description' => 'Nuevo Cargo'
                ],
                [
                'description' => 'Plan de cambio'
                ],
                [
                'description' => 'Por crecimiento Interno'
                ],
                [
                'description' => 'Traslado'
                ],                                               
                ];
                foreach ($data as $regiones) {
                    Type_cv::create($regiones);
                }
                    
        }
    }
}
