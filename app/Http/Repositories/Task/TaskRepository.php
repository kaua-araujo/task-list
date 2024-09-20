<?php

namespace App\Repositories\Task;

use App\Models\Task;

class TaskRepository
{
    private Task $model;

    public function __construct()
    {
        $this->model = new Task();
    }

    public function create($dto): ?Task
    {
        try {
            return $this->model::create($dto->toArray());
        } catch (\Throwable $th) {
            return null;
        }
    }

    public function index()
    {
       try {
           return $this->model::with('user')->get();
       }catch (\Throwable $th) {
            return null;
        }
    }

    public function show($id)
    {
        try {
            return $this->model::find($id);
        } catch (\Throwable $th) {
            return null;
        }
    }

    public function destroy($id)
    {
        try {
            $task = $this->model::find($id);

            if (!$task) {
                return null;
            }
            return $task->delete($id) ?$task: null;
        } catch (\Throwable $th) {
            return null;
        }
    }
}
