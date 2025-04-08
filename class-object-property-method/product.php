<?php

class Products {
    // Visibillity & Property 
    public $title = 'Title', 
           $author = 'Name', 
           $release_year = 'Years',
           $price = 0; 

    // Method
    public function get_label(){
        return "Book : $this->title , $this->author";
    }
}

$product1 = new Products();
$product1->title = 'Laskar Pelangi';
$product1->author = 'Andrea Hirata';
var_dump($product1);

$product2 = new Products();
$product2->release_year = '2005';

var_dump($product2);

$product3 = new Products();
$product3->title = 'Madilog';
$product3->author = 'Tan Malaka';
$product3->release_year = '2000';
$product3->price = 75000;

$product4 = new Products();
$product4->title = 'Laskar Pelangi';
$product4->author = 'Andrea Hirata';
$product4->release_year = '2005';
$product4->price = 81000;


echo "List of Books : <br>". $product3->get_label(). "<br>";
echo $product4->get_label(). "<br>";




