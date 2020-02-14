<?php


namespace App\ChainOfResponsibility;


use App\ChainOfResponsibility\Classes\CheckIin;
use App\ChainOfResponsibility\Classes\CheckPassword;

class Main
{
    public static function exec()
    {
        $item = [
            'iin' => '001228501449',
            'password' => 'asdaasdsa'
        ];

        $cIin = new CheckIin();
        $cPassword = new CheckPassword();
        $cIin->setNext($cPassword);

        try {
            echo $cIin->handle($item) . '<br>';
        } catch (\Exception $e) {
            echo $e->getMessage() ;
        }
    }
}