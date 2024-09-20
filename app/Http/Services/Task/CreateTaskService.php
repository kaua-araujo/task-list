<?php

namespace App\Http\Services\Task;

use App\Http\Dtos\Task\TaskCreateDto;
use App\Models\Task;
use App\Repositories\Task\TaskRepository;
use Exception;

class CreateTaskService
{

    private TaskRepository $repository;

    public function __construct(TaskRepository $repository)
    {

        return $this->repository = $repository;

    }

    public function execute(TaskCreateDto $dto): ?Task
    {

        $task = $this->repository->create($dto);
        if (!$task)
            throw new Exception("Não foi possível criar a task");

        return $task;

    }

}
