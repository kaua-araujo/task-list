<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository
{
    private User $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function create($dto): ?User
    {
        try {
            return $this->model::create($dto->toArray());
        } catch (\Throwable $th) {
            return null;
        }
    }

}
