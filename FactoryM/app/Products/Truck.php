<?php
namespace App\Products;


use App\Contracts\TransportContract;

class Truck implements TransportContract
{
    const SUCCESS_MESSAGE_SHIP = 'Груз доставлен с помощью грузовика';

    public function delivery(): void
    {
        echo self::SUCCESS_MESSAGE_SHIP . PHP_EOL;
    }
}