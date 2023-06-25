<?php

namespace App\Services;

use App\Repositories\TaskRepositoryInterface;

class TaskService
{
    private TaskRepositoryInterface $taskRepositoryInterface;

    public function __construct(TaskRepositoryInterface $taskRepositoryInterface)
    {
        $this->taskRepositoryInterface = $taskRepositoryInterface;
    }

    public function store(array $data)
    {
        return $this->taskRepositoryInterface->store($data);
    }

    public function getList()
    {
        return $this->taskRepositoryInterface->getList();
    }

    public function get(int $id)
    {
        return $this->taskRepositoryInterface->get($id);
    }

    public function update(array $data, int $id)
    {
        return $this->taskRepositoryInterface->update($data, $id);
    }

    public function destroy(int $id)
    {
        return $this->taskRepositoryInterface->destroy($id);
    }
}