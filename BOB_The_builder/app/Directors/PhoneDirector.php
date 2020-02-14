<?php
namespace App\Directors;

use App\Contracts\PhoneBuilderContract;
use App\Products\Phone;

class PhoneDirector
{
    protected $builder;

    public function __construct(PhoneBuilderContract $builder)
    {
        $this->builder = $builder;
    }

    public function makeIphoneX(): Phone
    {
        return $this->builder
            ->setDisplay('Super Retina HD')
            ->setCamera('Double 12MP')
            ->setProcessor('A11 Bionic')
            ->setOS('iOS')
            ->make();
    }

    public function makeSamsungS10(): Phone
    {
        return $this->builder
            ->setDisplay('Super AMOLED')
            ->setCamera('Double 16MP')
            ->setProcessor('Exynos 9820')
            ->setOS('Android')
            ->setMiniJack(true)
            ->make();
    }
}