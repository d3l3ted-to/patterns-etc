<?php
namespace App\FlyWeight\Classes;

class File
{
    public $path;
    public $type;

    public function __construct($path, FileType $type)
    {
        $this->path = $path;
        $this->type = $type;
    }

    public function open($target)
    {
        return $this->type->open($target, $this->path);
    }
}