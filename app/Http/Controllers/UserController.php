<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Services\UserService;

use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Requests\DeleteUserRequest;

class UserController extends Controller
{
    public $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $service = $this->service->index();

        return view('project::user', compact('service'));
    }

    public function show($id)
    {
        return $this->service->show($id);
    }

    public function store(CreateTaskRequest $request)
    {
        return $this->service->store($request->all());
    }

    public function destroy(DeleteUserRequest $request)
    {
        return $this->service->delete($request->all());
    }

    public function update(UpdateTaskRequest $request)
    {
        return $this->service->update($request->all());
    }
}
