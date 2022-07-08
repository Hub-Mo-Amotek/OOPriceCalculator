<?php

class priceCalculator {

private User $user;
private array $groups;

public function __construct(array $dataRow, array $groups){

    $this->user = new User($dataRow);
    $this->groups = $groups;
    
}

public function getAllFixedDiscounts(){

    $totalFixed = 0;

    foreach($this->groups as $item ){

     $totalFixed += $item['fixed_discount'];

    }

    return $totalFixed;
        
}

public function getHighestVariableDiscounts(){

    $highestVariable = 0;

    foreach($this->groups as $item ){
        
        if($item['variable_discount'] > $highestVariable) {
            $highestVariable = $item['variable_discount'];

        }
    }
    
    return $highestVariable;
        
}

}