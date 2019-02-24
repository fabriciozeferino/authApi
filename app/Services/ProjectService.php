<?php

namespace App\Services;

use App\Repositories\ProjectRepository;


class ProjectService extends AbstractService
{
    public $repository;

    private $user;

    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $service = $this->repository->index();

        return response()->json($service);
    }

    public function show($id)
    {
        $project = $this->repository->show($id);

        return $this->respondWithJson($project, 200);
    }

    public function store($data)
    {
        $project = $this->repository->create($data);

        return response()->json($project, 201);
    }

    public function update($data)
    {
        $project = $this->repository->show($data['id']);

        $project->update($data);

        return $this->respondWithJson($project, 200);
    }

    public function delete($data)
    {
        $project = $this->repository->show($data);

        $project->delete();

        return $this->respondWithJson(null, 204);
    }
}
