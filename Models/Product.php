<?php

class Product {

    private int $id;
    private string $name;
    private int $price;


    public function __construct(array $dataRow){

        $this->id = $dataRow['id'];
        $this->name = $dataRow['name'];
        $this->price = $dataRow['price'];

    }
}