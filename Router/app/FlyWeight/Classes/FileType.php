<?php

namespace App\FlyWeight\Classes;

class FileType
{
    public $extension;
    public $name;

    public function __construct($name, $extension)
    {
        $this->name = $name;
        $this->extension = $extension;
    }

    public function open($target, $path)
    {
        return sprintf('%s  %s/%s.%s', $target, $path, $this->name, $this->extension);
    }
}