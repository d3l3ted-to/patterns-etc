<?php
namespace App\Products;

use App\Contracts\ProductContract;

class Product implements ProductContract
{
    private $name, $value;

    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}