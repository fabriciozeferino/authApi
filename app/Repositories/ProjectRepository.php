<?php

namespace App\Repositories;


class ProjectRepository extends AbstractRepository
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table = 'projects';

    protected $guarded = [];

    /**
     * App\Users
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    /**
     * App\TaskRepository
     */
    public function tasks()
    {
        return $this->hasMany(TaskRepository::class, 'project_id', 'id');
    }
}
