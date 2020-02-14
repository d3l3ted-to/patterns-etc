<?php


namespace App\Decorator\Classes;

use App\Decorator\Contracts\NotificationContract;

class Decorator implements NotificationContract
{
    public $wrappee;

    public function wrap($c)
    {
        $this->wrappee = $c;
    }

    public function notify($message): string
    {
        return  $this->wrappee->notify($message);
    }

    public function notify2(): string
    {
        return $this->wrappee->notify2();
    }
}