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


       Permission::create(['name' => 'products'])->syncRoles([$rolAdmin,$rolEmpleado]);
    }
}
