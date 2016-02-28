<?php

namespace Lembarek\Role\Traits;

trait Roleable
{
         /**
          * return all roles for a user
          *
          * @return Lembarek\Role\Models\Role
          */
         public function roles()
         {
             return $this->belongsToMany('Lembarek\Role\Models\Role');
         }

        /**
         * check if the user has a role
         *
         * @param  string  $role
         * @return boolean
         */
        public function hasRole($role)
        {
            foreach($this->roles()->get() as $r){
                if($r->name == $role)
                    return true;
            }
            return false;
        }

        /**
         * assign a role to a user
         *
         * @param  string  $role
         * @return void
         */
        public function assignRole($role)
        {
            $this->roles()->attach($role);
        }
}
