<?php

class User {

    private int $id;
    private string $firstName;
    private string $lastName;
    private int $groupId;
    private $fixed_discount;
    private $variable_discount;
    
    public function __construct(array $dataRow){

        $this->id = $dataRow['id'];
        $this->firstName = $dataRow['firstname'];
        $this->lastName = $dataRow['lastname'];
        $this->groupId = $dataRow['group_id'];
        $this->fixed_discount = $dataRow['fixed_discount'];
        $this->variable_discount = $dataRow['variable_discount'];

    }

    public function calculatePrice(Product $product){

        //calculate
            
    }



}