<?php
namespace App;

use App\Contracts\ProductContract;
use App\Products\CompositeProduct;
use App\Products\Product;

class Main
{
    public static function getSum(ProductContract $product)
    {
        return $product->getValue();
    }

    public static function test()
    {
        $product1 = new Product('prod1', 15);
        $product2 = new Product('prod2', 25);
        $product3 = new Product('prod3', 20);
        $product4 = new Product('prod4', 45);
        $product5 = new Product('prod5', 80);
        $product6 = new Product('prod6', 5);
        $product7 = new Product('prod7', 8);
        $product8 = new Product('prod8', 12);
        $composite1 = new CompositeProduct([$product1, $product2, $product3]);
        $composite2 = new CompositeProduct([$product4, $product7, $composite1]);
        $composite3 = new CompositeProduct([$product5, $product6, $product8, $composite2]);
        echo self::getSum($composite1);
        echo self::getSum($composite2);
        echo self::getSum($composite3);
        var_dump($composite3);
    }
}