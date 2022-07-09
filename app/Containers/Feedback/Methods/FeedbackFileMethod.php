<?php

namespace App\Containers\Feedback\Methods;

use App\Containers\Feedback\Abstracts\FeedbackAbstract;
use App\Containers\Feedback\Implementing\FileCreate;
use App\Containers\Feedback\Interfaces\FeedbackInterface;

class FeedbackFileMethod extends FeedbackAbstract
{
    public function getMethodCreate(): FeedbackInterface
    {
        return new FileCreate();
    }
}
