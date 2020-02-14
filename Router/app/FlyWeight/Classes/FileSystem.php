<?php

namespace App\FlyWeight\Classes;

class FileSystem
{
    public $files = [];

    public function createFile($path, $name, $extension)
    {
        $type = FileFactory::getType($name, $extension);

        $file = new File($path, $type);
        $this->files[] = $file;
        return $file;
    }

    public function openAll($target)
    {
        /** @var File $file */
        foreach ($this->files as $file) {
            echo $file->open($target) . '<br>';
        }
    }

    public function open($target, $name, $extension = null)
    {
        $filtered = array_filter($this->files, function ($item) use ($extension, $name) {
            if ($item->type->name == $name) {
                if ($extension === null) {
                    return $item;
                } else {
                    if ($item->type->extension == $extension) {
                        return $item;
                    }
                }
            }
        });

        foreach ($filtered as $file) {
            echo $file->open($target) . '<br>';
        }
    }
}