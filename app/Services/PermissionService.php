<?php

namespace App\Services;

use App\Repositories\PermissionRepository;

class PermissionService extends AbstractService
{
    public $repository;

    public function __construct(PermissionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->index();
    }

    public function show($id)
    {
        return $this->repository->show($id);
    }

    public function store($data)
    {
        return $this->repository->create($data);
    }

    public function update($data)
    {
        $project = $this->repository->show($data['id']);

        return $project->update($data);
    }

    public function delete($data)
    {
        $project = $this->repository->show($data);

        return $project->delete();
    }
}
