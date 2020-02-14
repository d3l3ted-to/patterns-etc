<?php


namespace App\Decorator\Classes;


class VKDecorator extends Decorator
{
    public function notify($message): string
    {
        return 'VK: ' . parent::notify($message);
    }

    public function notify2(): string
    {
        return 'VK: ' . parent::notify2();
    }
}