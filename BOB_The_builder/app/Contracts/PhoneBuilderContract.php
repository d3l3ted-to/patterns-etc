<?php
namespace App\Contracts;

use App\Products\Phone;

interface PhoneBuilderContract
{
    public function setDisplay($display): PhoneBuilderContract;
    public function setCamera($camera): PhoneBuilderContract;
    public function setProcessor($processor): PhoneBuilderContract;
    public function setOS($os): PhoneBuilderContract;
    public function setMiniJack(Bool $miniJack): PhoneBuilderContract;
    public function make(): Phone;
}