<?php

namespace Modules\Project\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Project\Http\Services\RoleService;
use Illuminate\Routing\Controller;

class RoleController extends Controller
{
    public $service;

    public function __construct(RoleService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $service = $this->service->index();

        return view('project::role', compact('service'));
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
