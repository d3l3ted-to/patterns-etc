<?php


namespace App\Logistics;


use App\Products\Truck;
use App\Contracts\TransportContract;

class RoadLogistic extends AbstractLogistic
{
    /**
     * @return TransportContract
     */
    public function createTransport(): TransportContract
    {
        return new Truck();
    }
}