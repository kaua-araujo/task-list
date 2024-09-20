<?php

namespace App\Http\Services\User;

use App\Http\Dtos\User\CreateUserDto;
use App\Models\User;
use App\Repositories\User\UserRepository;
use Exception;

class CreateUserService
{

    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {

        return $this->repository = $repository;

    }

    public function execute(CreateUserDto $dto): ?User
    {

        $user = $this->repository->create($dto);
        if (!$user)
            throw new Exception("Não foi possível criar o usuario!");

        return $user;

    }

}
