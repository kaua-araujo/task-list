<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Dtos\User\CreateUserDto;
use App\Http\Requests\Task\CreateTaskRequest;
use App\Http\Services\User\CreateUserService;

class CreateUserController extends Controller
{
    public function create(CreateTaskRequest $request,  CreateUserService $CreateUserService)
    {
        try {
            $userDtop = new CreateUserDto($request->all());
            $CreateUserService->execute($userDtop);

           return response()->json([
                "status" => 200,
                "message" => "Usuário cadastrado com sucesso!",
            ]);

        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }
    }
}
