<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::create(['name'=>'Admin']);
        $role_reclutador = Role::create(['name'=>'Reclutador']);
        $role_jefe = Role::create(['name'=>'Jefe']);
        
        
        Permission::create(['name'=>'admin.index'])->assignRole($role_admin);
        Permission::create(['name'=>'reclutador.index'])->assignRole($role_reclutador);
        Permission::create(['name'=>'jefe.index'])->assignRole($role_jefe);
        
        // Permission::create(['name'=>'admin.import.excel'])->syncRoles([$role_admin,$role_jefe]);


    }
}
