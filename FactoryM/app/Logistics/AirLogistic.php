<?php


namespace App\Logistics;


use App\Products\Airplane;
use App\Contracts\TransportContract;

class AirLogistic extends AbstractLogistic
{
    /**
     * @return TransportContract
     */
    public function createTransport(): TransportContract
    {
        return new Airplane();
    }
}