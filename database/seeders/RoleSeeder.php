<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $rolAdmin = Role::create(['name' => 'Admin']);
       $rolClient = Role::create(['name' => 'Cliente']);
       $rolEmpleado = Role::create(['name' => 'Empleado']);
       
       Permission::create(['name' => 'dashboard'])->syncRoles([$rolAdmin,$rolEmpleado,$rolClient]);
       Permission::create(['name' => 'products.index'])->syncRoles([$rolAdmin,$rolEmpleado,$rolClient]);
       Permission::create(['name' => 'products.edit'])->assignRole([$rolAdmin]);
       Permission::create(['name' => 'products.create'])->assignRole([$rolAdmin]);
       Permission::create(['name' => 'products.destroy'])->assignRole([$rolAdmin]);


       Permission::create(['name' => 'users.index'])->syncRoles([$rolAdmin,$rolEmpleado]);
       Permission::create(['name' => 'users.edit'])->assignRole([$rolAdmin]);
       Permission::create(['name' => 'users.create'])->assignRole([$rolAdmin]);
       Permission::create(['name' => 'users.destroy'])->assignRole([$rolAdmin]);

       Permission::create(['name' => 'roles.index'])->syncRoles([$rolAdmin]);
       Permission::create(['name' => 'roles.edit'])->assignRole([$rolAdmin]);
       Permission::create(['name' => 'roles.create'])->assignRole([$rolAdmin]);
       Permission::create(['name' => 'roles.destroy'])->assignRole([$rolAdmin]);

       Permission::create(['name' => 'permissions.index'])->syncRoles([$rolAdmin]);
       Permission::create(['name' => 'permissions.edit'])->assignRole([$rolAdmin]);
       Permission::create(['name' => 'permissions.create'])->assignRole([$rolAdmin]);
       Permission::create(['name' => 'permissions.destroy'])->assignRole([$rolAdmin]);
    }
}
