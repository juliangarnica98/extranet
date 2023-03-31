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
                'name' => 'Karina',
                'last_name'=>'Arias',
                'email'=>'karina.arias@fastmoda.com.co',
                'password' => Hash::make('lilipink')
            ],
            [
                'name' => 'Sofia',
                'last_name'=>'Gonzalez',
                'email'=>'sofia.gonzalez@fastmoda.com.co',
                'password' => Hash::make('lilipink')
            ],
        ];
        $jefes=[
            [
                'name' => 'Jefe',
                'last_name'=>'prueba',
                'email'=>'jefe.prueba@fastmoda.com.co',
                'password' => Hash::make('lilipink')
            ],
        ];
        // $reclutadores=[
        //     [
        //         'name' => 'Reclutador1',
        //         'email'=>'reclutador1@fastmoda.com',
        //         'password' => Hash::make('lilipink')
        //     ],
        //     [
        //         'name' => 'Reclutador2',
        //         'email'=>'reclutador2@fastmoda.com',
        //         'password' => Hash::make('lilipink')
        //     ],
        // ];
        // $analistas=[
        //     [
        //         'name' => 'Analista1',
        //         'email'=>'analista1@fastmoda.com',
        //         'password' => Hash::make('lilipink')
        //     ],
        //     [
        //         'name' => 'Analista2',
        //         'email'=>'analista2@fastmoda.com',
        //         'password' => Hash::make('lilipink')
        //     ],
        // ];
        foreach ($administradores as $usuario) {
            User::create($usuario)->assignRole('Admin');

        }
        foreach ($jefes as $jefe) {
            User::create($jefe)->assignRole('Jefe');

        }


        // foreach ($reclutadores as $usuario) {
        //     User::create($usuario)->assignRole('Reclutador');
        // }
        // foreach ($analistas as $usuario) {
        //     User::create($usuario)->assignRole('Analista');
        // }

    }
}
