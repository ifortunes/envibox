<?php

namespace App\Containers\Feedback\Abstracts;

use App\Containers\Feedback\Interfaces\FeedbackInterface;

abstract class FeedbackAbstract
{
    /**
     * @param object $data
     * @return void
     */
    public function save(object $data)
    {
        $methods = $this->getMethodCreate();
        $methods->create($data);
    }

    /**
     * @return FeedbackInterface
     */
    abstract public function getMethodCreate(): FeedbackInterface;
}
