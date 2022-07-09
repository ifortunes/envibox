<?php

namespace App\Containers\Feedback\Implementing;

use App\Containers\Feedback\Interfaces\FeedbackInterface;
use Illuminate\Support\Facades\Storage;

class FileCreate implements FeedbackInterface
{
    /**
     * @param object $data
     * @return void
     */
    public function create(object $data): void
    {
        Storage::append('feedback/feedback'
            . '.json', json_encode([
                'name' => $data->getName(),
                'phone' => $data->getPhone(),
                'message' => $data->getMessage(),
            ])
        );
    }
}
