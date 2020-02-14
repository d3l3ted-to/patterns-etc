<?php


namespace App\ChainOfResponsibility\Classes;


class CheckPassword extends Handler
{
    public function handle($item)
    {
        $pasLength = strlen($item['password']);
        if ($pasLength > 16 || $pasLength < 5 ) {
            throw new \Exception('PASSWDError');
        }

        if ($this->next) {
            $this->next->handle($item);
        } else {
            var_dump($item);
        }
    }
}