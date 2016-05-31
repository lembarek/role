<?php

use Illuminate\Database\Seeder;
use Lembarek\Role\Models\Role;
use Lembarek\Role\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $roles = [
            'admin' => ['delete user', 'add user'],
            'owner' => ['delete admin', 'add admin'],
            'developper'  => ['see users'],
            'designer' => ['see users']
        ];
            foreach($roles as $role => $permissions){
                $r  = Role::create(['name' => $role]);
                foreach($permissions as $permission){
                    $p = Permission::create(['name' => $permission]);
                    $r->assignPermission($p);
                }
            }
    }
}
