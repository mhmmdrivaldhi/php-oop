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

class CetakInfoproduct {
    public function cetak(Product $product){
        $str = "{$product->get_label()} | {$product->release_year} (Rp. {$product->price})";
        return $str;
    }
}

$product1 = new Product("Madilog", "Tan Malaka", "2000", 50000);


$product2 = new Product("Laskar Pelangi", "Andrea Hirata", "2005", 81000);


echo "List of Books : <br>";
echo $product1->get_label(). "<br>";
echo $product2->get_label(). "<br>";

echo "<hr>";

$info_product_1 = new CetakInfoproduct();
echo $info_product_1->cetak($product1);