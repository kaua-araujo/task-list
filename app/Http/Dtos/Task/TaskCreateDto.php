<?php

namespace App\Http\Dtos\Task;

use Spatie\DataTransferObject\DataTransferObject;

class TaskCreateDto extends DataTransferObject
{
    public string $title;
    public string $end_date;
    public string $user_id;
    public function __construct(array $data)
    {
        $this->title = !empty($data['title']) ? $data['title'] : '';
        $this->end_date = !empty($data['end_date']) ? $data['end_date'] : '';
        $this->user_id = !empty($data['user_id']) ? $data['user_id'] : '';
    }
}
