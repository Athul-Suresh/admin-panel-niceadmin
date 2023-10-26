<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Reset cached roles and permissions
         app()[PermissionRegistrar::class]->forgetCachedPermissions();

         //create permissions
         $arrayOfPermissionNames = [
           'view-user','create-user','edit-user','destroy-user',
           'view-access-control',
           'view-role','edit-role','destroy-role','create-role',
           'view-permission','create-permission','edit-permission','destroy-permission',
           'backup-app','backup-db','view-settings','update-settings',
         ];

        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'web'];
        });


       Permission::insert($permissions->toArray());
         // create roles and assign permissions
         $role = Role::create(['name' => 'manager'])
          ->givePermissionTo(['view-user','create-user']);
         $role = Role::create(['name' => 'super-admin']);
         $role->givePermissionTo(Permission::all());
    }
}
