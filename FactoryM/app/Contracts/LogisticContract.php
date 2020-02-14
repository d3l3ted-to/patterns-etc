<?php


namespace App\Contracts;


interface LogisticContract
{
    public function prepare(): void;

    public function createTransport(): TransportContract;
}