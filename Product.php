<?php
class Product
{
    // declaing the type of the product property
    public int $id;
    public string $name;
    public float $price;

    // Constructor
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to format the price with two decimal places & adding "$" symbol
    public function getFormattedPrice()
    {
        return '$' . number_format($this->price, 2);
    }

    // Method to show product details using sprintf
    public function showDetails()
    {
        $details = sprintf("Product Details:\n ID: %d \n Name: %s\n Price: %s\n", $this->id, $this->name, $this->getFormattedPrice());
        echo $details;
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
