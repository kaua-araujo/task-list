<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Dtos\User\CreateUserDto;
use App\Http\Requests\Task\CreateTaskRequest;
use App\Http\Services\User\CreateUserService;

class CreateTaskController extends Controller
{
    public function create(CreateTaskRequest $request,  CreateUserService $createUserService)
    {
        try {
            $userDto = new CreateUserDto($request->all());
            $createUserService->execute($userDto);

           return response()->json([
                "status" => 200,
                "message" => "Usuário cadastrado com sucesso!",
            ]);

        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }
    }
}
