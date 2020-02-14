<?php


namespace App\Products;


use App\Contracts\ProductContract;

class CompositeProduct implements ProductContract
{
    private $items = [];

    public function __construct(Array $items = [])
    {
        $this->items = $items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getValue()
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getValue();
        }
        return $sum;
    }
}