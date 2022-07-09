<?php

namespace App\Containers\Feedback\Implementing;

use App\Containers\Feedback\Interfaces\FeedbackInterface;
use App\Models\feedback;

class DBCreate implements FeedbackInterface
{
    /**
     * @param object $data
     * @return void
     */
    public function create(object $data): void
    {
        feedback::create([
            'name' => $data->getName(),
            'phone' => $data->getPhone(),
            'message' => $data->getMessage(),
        ]);
    }
}
