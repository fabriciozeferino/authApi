<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Repositories\ProjectRepository;
use App\Repositories\TaskRepository;
use App\Repositories\RoleRepository;
use App\Repositories\PermissionRepository;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
        return $this->hasMany(TaskRepository::class);
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
