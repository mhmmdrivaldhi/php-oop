<?php

class Product {
    // Visibillity & Property 
    public $title, 
           $author, 
           $release_year,
           $price,
           $pages, 
           $category;

    public function __construct($category, $title, $author, $release_year, $price, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->release_year = $release_year;
        $this->price = $price;
        $this->pages = $pages;
        $this->category = $category;
    }

    // Method
    public function get_label(){
        return "$this->title | $this->author";
    }
    public function get_full_info() {
        $value = "{$this->category} : {$this->get_label()} | {$this->release_year} (Rp. {$this->price} ) - {$this->pages} Lembar";
        return $value;
    }
}

class CetakInfoproduct {
    // public function cetak(Product $product){
    //     $str = "{$product->get_label()} | {$product->release_year} (Rp. {$product->price}) - {$product->pages} Pages";
    //     return $str;
    // }

    public function newPrint(Product $product) {
        $print_new_info = "{$product->get_full_info()}";
        return $print_new_info;
    }
}

$product1 = new Product("Filsafat","Madilog", "Tan Malaka", "2000", 50000, "391");
$product2 = new Product("Novel","Laskar Pelangi", "Andrea Hirata", "2005", 81000, "441");
$new_product = new Product("Novel", "Sang Pemimpi", "Andrea Hirata", "2005", 79000, "591");

// echo "List of Books : <br>";
// echo $product1->get_label(). "<br>";
// echo $product2->get_label(). "<br>";

$info_product_1 = new CetakInfoproduct();
echo $info_product_1->newPrint($product1);
echo "<hr>";
$new_book_info = new CetakInfoproduct();
echo $new_book_info->newPrint($new_product);
echo "<hr>";
$new_book_info = new CetakInfoproduct();
echo $new_book_info->newPrint($product2);