<?php
namespace App;
use Collections\Collection;
use Collections\Work\Work;
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
    new Product('Tv', 1220,'')
];



/*function getEmails($productData)
{
    $userWithEmails = array_filter($productData, function($product) {
        return $product->email != null;
    });

    return array_map(function($user) {
        return $user->email;
    }, $userWithEmails);


}*/

//instead of this we can now implement the collection class

/*function getEmail($productData)
{
    return (new Collection($productData))->filter(function ($product){
      return $product->email != null;
    })->map(function ($user) {
       return $user->email;
    })->toArray();
}


dump(getEmail($productData));*/

dump((new Work(['nikesh','nischal','sahi']))->merge()->pop());
