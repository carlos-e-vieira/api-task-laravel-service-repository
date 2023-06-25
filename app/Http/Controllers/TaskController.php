<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private TaskService $taskServide;

    public function __construct(TaskService $taskServide)
    {
        $this->taskServide = $taskServide;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        return $this->taskServide->store($data);
    }

    public function getList()
    {
        return $this->taskServide->getList();
    }

    public function get(int $id)
    {
        return $this->taskServide->get($id);
    }

    public function update(Request $request, int $id)
    {
        $data = $request->all();
        return $this->taskServide->update($data, $id);
    }

    public function destroy(int $id)
    {
        return $this->taskServide->destroy($id);
    }
}
