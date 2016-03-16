<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
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
