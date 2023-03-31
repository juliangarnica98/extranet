<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
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
                'description' => 'Cedi'
                ],
                [
                'description' => 'Administrativos'
                ],
                [
                'description' => 'Comercial'
                ],
                                                 
                ];
                foreach ($data as $areas) {
                    Area::create($areas);
                }
                    
        }
    }
}
