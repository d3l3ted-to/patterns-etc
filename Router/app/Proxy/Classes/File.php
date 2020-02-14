<?php


namespace App\Proxy\Classes;


use App\Proxy\Contracts\FileContract;
use App\Proxy\Traits\FileTrait;

class File implements FileContract
{
    use FileTrait;

    public function open()
    {
        return $this->data;
    }
}