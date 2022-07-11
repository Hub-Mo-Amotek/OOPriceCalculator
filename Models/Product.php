<?php

class Product {

    private int $id;
    private string $name;
    private int $price;


    public function __construct(array $productDataRow){

        $this->id = $productDataRow['id'];
        $this->name = $productDataRow['name'];
        $this->price = $productDataRow['price'];

    }

    public function getProductPrice(){
        return $this->price;
    }
}