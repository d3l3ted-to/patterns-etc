<?php


namespace App\Proxy\Contracts;


interface ArchiveFileContract
{
    public function unZip(FileContract $file);
}