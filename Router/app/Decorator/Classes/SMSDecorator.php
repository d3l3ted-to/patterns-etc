<?php


namespace App\Decorator\Classes;


class SMSDecorator extends Decorator
{
    public function notify($message): string
    {
        return 'SMS: ' . parent::notify();
    }

    public function notify2(): string
    {
        return 'SMS: ' . parent::notify2();
    }
}