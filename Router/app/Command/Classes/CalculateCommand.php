<?php


namespace App\Command\Classes;


class CalculateCommand extends Command
{
    public function execute()
    {
        if (count($this->attributes) <= 1) {
            return $this->attributes[0];
        }

        $sum = 0;

        foreach ($this->attributes as $attr) {
            if (is_numeric($attr)) {
                $sum += $attr;
            }
        }

        return $sum;
    }
}