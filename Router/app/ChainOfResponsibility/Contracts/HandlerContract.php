<?php


namespace App\ChainOfResponsibility\Contracts;


interface HandlerContract
{
    public function handle($item);
}