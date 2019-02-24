<?php

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;


abstract class AbstractRepository extends Model //implements RepositoryInterface
{
    public function index()
    {
        return $this->paginate(5);
    }

    // Create a new record in the database
    public function store(array $data)
    {
        return $this->create($data);
    }

    // Update record in the database
    public function updateRow(array $data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    // Remove record from the database
    public function deleteRow($id)
    {
        return $this->destroy($id);
    }

    // Show the record with the given id
    public function show($id)
    {
        return $this->findOrFail($id);
    }
}
