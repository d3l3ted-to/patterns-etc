<?php


namespace App\Proxy\Classes;


use App\Proxy\Contracts\ArchiveFileContract;
use App\Proxy\Contracts\FileContract;
use App\Proxy\Traits\FileTrait;

class ArchiveFile implements
    ArchiveFileContract,
    FileContract
{
    use FileTrait;

    private $service;

    public function __construct($service)
    {
        $this->service = $service;
    }

    public function unZip(FileContract $file)
    {
        $str = $file->open();
        return substr($str, 1, strlen($str) - 2);
    }

    public function open()
    {
        return $this->unZip($this->service);
    }
}