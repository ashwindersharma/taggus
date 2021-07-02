<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'super admin']);
        $role2 = Role::create(['name' => 'admin']);
        $role3 = Role::create(['name' => 'user']);
        
        $permissions = [
           'reset password',
           'role-list',
           'role-edit',
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
        
        $role3->givePermissionTo('reset password');
        $role1->givePermissionTo('role-list');
        $role1->givePermissionTo('role-edit');
        
    }
}
