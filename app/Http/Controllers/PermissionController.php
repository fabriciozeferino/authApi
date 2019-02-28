<?php

namespace App\Controllers;

use App\Services\PermissionService;

class PermissionController extends Controller
{
    public $user;

    public $service;

    public function __construct(PermissionService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $service = $this->service->index();

        return view('project::permission', compact('service'));
    }

    public function show($id)
    {
        $this->service->show($id);
    }

    public function store(CreateTaskRequest $request)
    {
        return $this->service->store($request->all());
    }

    public function destroy(DeleteTaslRquest $request)
    {
        $this->service->delete($request->all());
    }

    public function update(UpdateTaskRequest $request)
    {
        return $this->service->update($request->all());
    }
}
