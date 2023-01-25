<?php

namespace Database\Seeders;

use App\Models\Boss;
use Database\Factories\BossFactory;
use Illuminate\Database\Seeder;

class BossSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Boss::factory()->count(5)->create();
    }
}
