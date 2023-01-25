<?php

namespace Database\Seeders;

use App\Models\Regional;
use Illuminate\Database\Seeder;

class RegionalSeeder extends Seeder
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
            'description' => 'ADMINISTRATIVOS'
            ],
            [
            'description' => 'ADMINISTRATIVOS - OUTS NOM'
            ],
            [
            'description' => 'CENTRO DE DISTRIBUCION TEMP'
            ],
            [
            'description' => 'CENTRO DISTRIBUCION'
            ],
            [
            'description' => 'FACTORY'
            ],
            [
            'description' => 'REGIONAL ANTIOQUIA'
            ],
            [
            'description' => 'REGIONAL CENTRO'
            ],
            [
            'description' => 'REGIONAL CENTRO NORTE'
            ],
            [
            'description' => 'REGIONAL CENTRO SUR'
            ],
            [
            'description' => 'REGIONAL COSTA'
            ],
            [
            'description' => 'REGIONAL COSTA TEMP'
            ],
            [
            'description' => 'REGIONAL NORTE'
            ],
            [
            'description' => 'REGIONAL SUR'
            ],
            [
            'description' => 'UNIQUE'
            ],
                                                            
            ];
            foreach ($data as $regiones) {
                Regional::create($regiones);
            }
                
    }
    
}
