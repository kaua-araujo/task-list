<?php

namespace App\Http\Services\Task;

use App\Repositories\Task\TaskRepository;

class ShowTaskService
{
    private TaskRepository $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function execute(string $id)
    {
        $task = $this->taskRepository->show($id);

        return $task;
    }
}
