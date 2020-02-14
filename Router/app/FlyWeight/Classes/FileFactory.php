<?php

namespace App\FlyWeight\Classes;

class FileFactory
{
    public static $treeTypes = [];

    public static function getType($name, $extension)
    {
        if (in_array($name, self::$treeTypes)) {
            return self::$treeTypes[$name];
        }

        $type = new FileType($name, $extension);
        self::$treeTypes[$name] = $type;
        return $type;
    }
}