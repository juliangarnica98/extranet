<?php

namespace Database\Seeders;

use Database\Factories\BossFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Boss::factory(5)->create();
        // \App\Models\User::factory(10)->create();
        // $this->call(AreaSeeder::class);

        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(TypeCvSeeder::class);
        $this->call(CvsTableSeeder::class);
        // $this->call(VacantsTableSeeder::class);
        // $this->call(CvvacantSeeder::class);
    }
}
