<?php


namespace App\Command\Classes;


class PrintCommand extends Command
{
    public function execute()
    {
        foreach ($this->attributes as $attr) {
            if (is_string($attr) || is_numeric($attr)) {
                echo  $attr . '<br>';
            }
        }
    }
}