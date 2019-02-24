<?php

namespace App\Repositories;


class PermissionRepository extends AbstractRepository
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table = 'permissions';

    protected $guarded = [];

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(RoleRepository::class, 'permission_role', 'permission_id', 'role_id');
    }

    /**
     * The users that belong to the user.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'permission_user', 'permission_id', 'user_id');
    }
}
