<?php

namespace Database\Seeders;

use App\Models\Cvvacant;
use Illuminate\Database\Seeder;

class CvvacantSeeder extends Seeder
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
                'vacant_id' => 22,
                'cv_id'=>1
            ],
            [
                'vacant_id' => 22,
                'cv_id'=>2
            ],
        ];
        foreach ($data as $data) {
            Cvvacant::create($data);

        }
    }
}
