<?php


namespace App\Command\Classes;


abstract class Command
{
    public $commandName;
    public $attributes;

    public function __construct($name, ...$attributes)
    {
        $this->commandName = $name;
        $this->attributes = $attributes;
    }

    abstract public function execute();
}