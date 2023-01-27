<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $administradores=[
            [
                'name' => 'Admin',
                'email'=>'admin@fastmoda.com', 
                'password' => Hash::make('lilipink')
            ],
            [
                'name' => 'Admin2',
                'email'=>'admin2@fastmoda.com', 
                'password' => Hash::make('lilipink')
            ],
        ];
        $reclutadores=[
            [
                'name' => 'Reclutador1',
                'email'=>'reclutador1@fastmoda.com', 
                'password' => Hash::make('lilipink')
            ],
            [
                'name' => 'Reclutador2',
                'email'=>'reclutador2@fastmoda.com', 
                'password' => Hash::make('lilipink')
            ],
        ];
        $analistas=[
            [
                'name' => 'Analista1',
                'email'=>'analista1@fastmoda.com', 
                'password' => Hash::make('lilipink')
            ],
            [
                'name' => 'Analista2',
                'email'=>'analista2@fastmoda.com', 
                'password' => Hash::make('lilipink')
            ],
        ];
        foreach ($administradores as $usuario) {
            User::create($usuario)->assignRole('Admin');
        }
        foreach ($reclutadores as $usuario) {
            User::create($usuario)->assignRole('Reclutador');
        }
        foreach ($analistas as $usuario) {
            User::create($usuario)->assignRole('Analista');
        }
          
    }
}
