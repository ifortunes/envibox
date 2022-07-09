<?php

namespace App\Containers\Feedback\Methods;

use App\Containers\Feedback\Abstracts\FeedbackAbstract;
use App\Containers\Feedback\Implementing\DBCreate;
use App\Containers\Feedback\Interfaces\FeedbackInterface;

class FeedbackDBMethod extends FeedbackAbstract
{
    public function getMethodCreate(): FeedbackInterface
    {
        return new DBCreate();
    }
}
