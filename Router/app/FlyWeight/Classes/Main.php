<?php

namespace App\FlyWeight\Classes;

class Main
{
    public static function exec()
    {
        $system = new FileSystem();

        $system->createFile('C:/test1', 'asdasa', 'txt');
        $system->createFile('C:/test2', 'agagagsg', 'pdf');
        $system->createFile('C:/test2', 'agagagsg', 'txt');


        $system->open('atom', 'agagagsg', 'pdf');
    }
}