<?php

namespace App\Containers\Feedback\DTO;

class FeedbackDTO
{
    public function __construct(
        private string $name,
        private string|int $phone,
        private string $message,
    ){}

    public function getName(): string
    {
        return $this->name;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
