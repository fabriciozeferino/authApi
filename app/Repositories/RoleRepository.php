<?php

namespace App\Repositories;


class RoleRepository extends AbstractRepository
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table = 'roles';

    protected $guarded = [];

    /**
     * The permissions that belong to the user.
     */
    public function permissions()
    {
        return $this->belongsToMany(PermissionRepository::class, 'permission_role', 'role_id', 'permission_id');
    }

    /**
     * The users that belong to the user.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'role_user', 'role_id', 'user_id');
    }
}
