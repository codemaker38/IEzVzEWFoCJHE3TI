<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'company',
        'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * User roles
     *
     * @return \App\Models\Role
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    /**
     * Authorize roles
     *
     * @param mixed $roles
     * @return boolean
     */
    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) || abort(401, 'Unauthorized action.');
        }

        return $this->hasRole($roles) || abort(401, 'Unauthorized action.');
    }

    /**
     * Has any role
     *
     * @param array $roles
     * @return boolean
     */
    public function hasAnyRole($roles)
    {
        return $this->roles()->whereIn('name', $roles)->first() !== null;
    }

    /**
     * Has role
     *
     * @param string $role
     * @return boolean
     */
    public function hasRole($role)
    {
        return $this->roles()->where('name', $role)->first() !== null;
    }
}
