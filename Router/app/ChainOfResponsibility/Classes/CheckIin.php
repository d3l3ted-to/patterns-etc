<?php


namespace App\ChainOfResponsibility\Classes;


class CheckIin extends Handler
{
    public function handle($item)
    {
        if (strlen($item['iin']) < 12) {
            throw new \Exception('IINError');
        }

        if ($this->next) {
            $this->next->handle($item);
        } else {
            var_dump($item);
        }
    }
}