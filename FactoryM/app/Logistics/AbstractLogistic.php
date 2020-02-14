<?php


namespace App\Logistics;


use App\Contracts\LogisticContract;
use App\Contracts\TransportContract;

abstract class AbstractLogistic implements LogisticContract
{
    /** @var TransportContract */
    private $transport;

    public function prepare(): void
    {
        $this->transport = $this->createTransport();
    }

    public function deliver()
    {
        $this->transport->delivery();
    }

    abstract public function createTransport(): TransportContract;
}