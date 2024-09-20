<?php

namespace App\Http\Services\Task;

use App\Repositories\Task\TaskRepository;

class IndexTasksService
{
    private TaskRepository $TaskRepository;

    public function __construct(TaskRepository $TaskRepository)
    {
        $this->TaskRepository = $TaskRepository;
    }

    public function execute()
    {
        $tasks = $this->TaskRepository->index();

        return $tasks;
    }
}
