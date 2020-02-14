<?php


namespace App\Logistics;


use App\Contracts\TransportContract;
use App\Products\Ship;

class SeaLogistic extends AbstractLogistic
{
    /**
     * @return TransportContract
     */
    public function createTransport(): TransportContract
    {
        return new Ship();
    }
}