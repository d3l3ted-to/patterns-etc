<?php


namespace App\Contracts;


interface TransportContract
{
    public function delivery(): void;
}