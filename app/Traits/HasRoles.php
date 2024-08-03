<?php

// trait hasRoles;
use App\Models\Role;
namespace App\Traits;

trait HasRole

{
    public function HasRole(String $role) : bool
    {
        
        return $this->roles()->where('name',$role)->exists();
    }

    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    public function isMember(): bool
    {
        return $this->hasRole('member');
    }
    
}