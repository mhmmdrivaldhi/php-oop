<?php

class Product {
    // Visibillity & Property 
    public $title, 
           $author, 
           $release_year,
           $price; 

    public function __construct($title, $author, $release_year, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->release_year = $release_year;
        $this->price = $price;
    }

    // Method
    public function get_label(){
        return "Book : $this->title , $this->author";
    }
}

$product1 = new Product("Madilog", "Tan Malaka", "2000", 50000);


$product2 = new Product("Laskar Pelangi", "Andrea Hirata", "2005", 81000);


echo "List of Books : <br>";
echo $product1->get_label(). "<br>";
echo $product2->get_label(). "<br>";




