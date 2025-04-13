<?php

class Product {
    // Visibillity & Property 
    public $title, 
           $author, 
           $release_year,
           $price,
           $pages;

    public function __construct($title, $author, $release_year, $price, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->release_year = $release_year;
        $this->price = $price;
        $this->pages = $pages;
    }

    // Method
    public function get_label(){
        return "$this->title | $this->author";
    }
    public function get_info_product() {
        $value = " {$this->get_label()} | {$this->release_year} (Rp. {$this->price} ) - {$this->pages} Lembar";
        return $value;
    }
}

class Romance extends Product {
    public function get_info_product()
    {
        $value = "Romansa :" . parent::get_info_product();
        return $value;
    }
}
class Filsafat extends Product {
    public function get_info_product()
    {
        $value = "Filsafat :" . parent::get_info_product();
        return $value;
    }
}

$product1 = new Filsafat("Madilog", "Tan Malaka", "2000", 50000, "391");
$new_product2 = new Romance("Hujan Di bulan Juni", "Sapardi Joko Damono", "2005", 79000, "591");

echo $product1->get_info_product();
echo "<hr>";
echo $new_product2->get_info_product();
