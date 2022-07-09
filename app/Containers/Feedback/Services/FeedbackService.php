<?php

namespace App\Containers\Feedback\Services;

use App\Containers\Feedback\Methods\{
    FeedbackDBMethod,
    FeedbackFileMethod
};

class FeedbackService
{
    /**
     * @param object $data
     * @return void
     */
    public function run(object $data): void
    {
        $methodFile = app(FeedbackFileMethod::class);

        $methodFile->save($data);
    }
}
