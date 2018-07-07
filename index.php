<?php

require('vendor/autoload.php');

class Product
{

    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function delete()
    {
        return 'helo world';
    }
}


$productData = [
    new Product('Radio', 122),
    new Product('Walkman', 150),
    new Product('Watch', 200),
    new Product('Mobile', 500),
    new Product('Tv', 1220),
];

function test($items, $func)
{
    foreach ($items as $item) {
         $func($item);
    }
}

$data = test($productData, function($product) {
   return $product->delete();
});

dd(test());

