<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Permission;

use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => "home"])->syncRoles($role1, $role2);
        Permission::create(['name' => "APEalimentacion"])->assignRole($role1);
        Permission::create(['name' => "APEsena"])->syncRoles($role2, $role1);
        Permission::create(['name' => "APEinterno"])->assignRole($role1);
        Permission::create(['name' => "APEtransporte"])->assignRole($role1);
        Permission::create(['name' => "LIDretorant"])->assignRole($role1);
        Permission::create(['name' => "APEalimLIDrutasentacion"])->assignRole($role1);
        Permission::create(['name' => "HISeventos"])->assignRole($role2);



    }
}
