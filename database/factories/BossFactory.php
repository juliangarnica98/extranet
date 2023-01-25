<?php

namespace Database\Factories;
use App\Models\Boss;
use App\Models\Cdc;
use App\Models\Regional;
use Illuminate\Database\Eloquent\Factories\Factory;

class BossFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     */

    protected $model = Boss::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            // 'regional_id'=> Regional::all()->random()->id,
            // 'cdc_id'=> Cdc::all()->random()->id
            'regional_id'=>$this->faker->randomElement([1, 2, 3]),
            'cdc_id'=>$this->faker->randomElement([1, 2, 3])
        ];
    }
}
