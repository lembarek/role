<?php

use Illuminate\Database\Seeder;
use Lembarek\Role\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
            $roles = ['admin', 'owner', 'developper', 'designer'];
            foreach($roles as $role){
                Role::create(['name' => $role]);
            }
    }
}
