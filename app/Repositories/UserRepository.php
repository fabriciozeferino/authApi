<?php

namespace App\Repositories;


class UserRepository extends AbstractRepository
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table = 'users';

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at', 'email_verified_at'
    ];


    /**
     * The project that belong to the user.
     */
    public function project()
    {
        return $this->hasMany(ProjectRepository::class);
    }

    /**
     * The task that belong to the user.
     */
    public function task()
    {
        return $this->hasMany(TasksRepository::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(RoleRepository::class, 'role_user', 'user_id', 'role_id');
    }

    /**
     * The permissions that belong to the user.
     */
    public function permissions()
    {
        return $this->belongsToMany(PermissionRepository::class, 'permission_user', 'user_id', 'permission_id');
    }
}
