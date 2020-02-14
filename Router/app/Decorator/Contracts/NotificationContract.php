<?php


namespace App\Decorator\Contracts;


interface NotificationContract
{
    public function notify($message): string ;
    public function notify2(): string ;
}