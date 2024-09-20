<?php

namespace App\Http\Dtos\User;

use Spatie\DataTransferObject\DataTransferObject;

class CreateUserDto extends DataTransferObject
{
    public string $name;
    public string $email;
    public string $password;
    public function __construct(array $data)
    {
        $this->name = !empty($data['name']) ? $data['name'] : '';
        $this->email = !empty($data['email']) ? $data['email'] : '';
        $this->password = !empty($data['password']) ? $data['password'] : '';
    }
}
