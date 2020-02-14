<?php


namespace App\Proxy;


use App\Proxy\Classes\ArchiveFile;
use App\Proxy\Classes\File;

class Main
{

    public static function exec()
    {
        $file1 = new File();
        $file2 = new ArchiveFile($file1);

        $file1->setData('^asdadas^');

        var_dump($file1->open());
        var_dump($file2->open());
    }
}