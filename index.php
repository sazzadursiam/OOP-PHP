<?php
// blueprint
class Product
{
    // Properties - variable
    public static $price = 2;
    public $color = "2freen";
    public $total = 0;

    // methods - function
    function calculate_total()
    {
        return $this->total = 10 * 20;
    }
    static function generate_id()
    {
        return rand(0, 9999);
    }
}

// $book = new Product(); // instantiation
// echo "Book " . $book->price;
// echo "<br>";
// echo $book->calculate_total();
// echo "<br>";
// $phone = new Product(); // instantiation
// echo "Phone " . $phone->price;


// // call class properties without create instance or object
// echo "<h1>" . Product::generate_id() . "</h1>";
// echo "<h1>" . Product::$price . "</h1>";

$book = new Product;
echo $book->calculate_total();
