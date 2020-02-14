<?php


namespace App\Contracts;


interface ApplicationConfiguratorContract
{
    public function make($type = null): ApplicationContract;
}