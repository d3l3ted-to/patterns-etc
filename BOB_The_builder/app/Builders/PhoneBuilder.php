<?php
namespace App\Builders;

use App\Contracts\PhoneBuilderContract;
use App\Products\Phone;

class PhoneBuilder implements PhoneBuilderContract
{
    protected $phone;

    public function __construct()
    {
        $this->phone = new Phone();
    }

    public function setDisplay($display): PhoneBuilderContract
    {
        $this->phone->setDisplay($display);
        return $this;
    }

    public function setCamera($camera): PhoneBuilderContract
    {
        $this->phone->setCamera($camera);
        return $this;
    }

    public function setOS($os): PhoneBuilderContract
    {
        $this->phone->setOperationalSystem($os);
        return $this;
    }

    public function setProcessor($processor): PhoneBuilderContract
    {
        $this->phone->setProcessor($processor);
        return $this;
    }

    public function setMiniJack(Bool $miniJack): PhoneBuilderContract
    {
        $this->phone->setHaveMiniJack($miniJack);
        return $this;
    }

    public function make(): Phone
    {
        return $this->phone;
    }
}