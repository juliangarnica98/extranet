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
        $role_analista = Role::create(['name'=>'Analista']);
        
        //assignRole($role);
        //syncRole([$role_admin,$role_jefe]);
        Permission::create(['name'=>'admin.index'])->assignRole($role_admin);
        Permission::create(['name'=>'reclutador.index'])->assignRole($role_reclutador);
        Permission::create(['name'=>'analista.index'])->assignRole($role_analista);
        // Permission::create(['name'=>'admin.import.excel'])->syncRoles([$role_admin,$role_jefe]);

        // Permission::create(['name'=>'boss.index'])->assignRole($role_jefe);
        // Permission::create(['name'=>'boss.show'])->assignRole($role_jefe);

        // Permission::create(['name'=>'admin.import.excel'])->assignRole($role_jefe);
    }
}
