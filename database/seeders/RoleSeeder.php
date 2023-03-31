<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{

    public function run():void
    {
        $role1= Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'User']);

       
        Permission::create(['name' => 'admin.prueba'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.nuevaprueba'])->assignRole($role1);

        Permission::create(['name' => 'admin.apprentices'])->assignRole($role1);
        Permission::create(['name' => 'admin.apprentices.add'])->assignRole($role1);
        Permission::create(['name' => 'admin.apprentices.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.apprentices.delete'])->assignRole($role1);


    }
}
