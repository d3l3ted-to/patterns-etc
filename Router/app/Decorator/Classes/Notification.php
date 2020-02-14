<?php

 namespace App\Decorator\Classes;


use App\Decorator\Contracts\NotificationContract;

class Notification implements NotificationContract
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function notify($message): string
    {
        return $message;
    }

    public function notify2(): string
    {
        return $this->message;
    }
}