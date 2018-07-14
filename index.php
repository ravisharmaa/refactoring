<?php

require('vendor/autoload.php');

class Product
{

    public $name;
    public $price;
    public $outOfStock;

    public function __construct($name, $price, $outOfStock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->outOfStock = $outOfStock;
    }

    public function delete()
    {
        return 'helo world';
    }
}


$productData = [
    new Product('Radio', 122,true),
    new Product('Walkman', 150, false),
    new Product('Watch', 200, false),
    new Product('Mobile', 500, false),
    new Product('Tv', 1220, false),
];

$productNames = array_map(function($product){
    return $product->outOfStock;
}, $productData);

dd($productNames);

