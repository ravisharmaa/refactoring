<?php
namespace App;

class Product
{

    public $name;
    public $price;
    public $email;
   

    public function __construct(String $name, int $price, String $email )
    {
        $this->name = $name;
        $this->price = $price;
        $this->email = $email;
       
    }

   
}



$productData = [
    new Product('Radio', 122,'jag@gmail.com'),
    new Product('Walkman', 150, 'ravi@gmail.com'),
    new Product('Watch', 200, 'bastola@ymail.com'),
    new Product('Mobile', 500,'test@xyz.com' ),
    new Product('Tv', 1220,'test@email.com')
];

//Reduce takes items from array and reduces it to a single value
$customer = array_reduce($productData, function ($customer, $product){
    return $customer . $product->email. ';';
},'');


$productPrice = array_reduce($productData,function ($productPrice, $product) {
    return $productPrice + $product->price;
},0);

//echo $productPrice;
//echo $customer;

function sum($items, $callback)
{
    return array_reduce($items, function($total, $item) use ($callback) {
        return $total + $callback($item);
    },0);
}




$totalPrice = sum($productData, function($product) {
    return $product->price;
});

//print $totalPrice;

function names($names, $callback)
{
    return array_reduce($names, function($customer, $name) use ($callback) {
        return $customer. $callback($name) .';';
    },'');
}

$emails = names($productData, function($customer) {
    return $customer->email;
});


print $emails;

