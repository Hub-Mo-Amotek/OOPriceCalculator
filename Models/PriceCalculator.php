<?php

class priceCalculator {

private User $user;

public function __construct(array $dataRow, array $related_groups){

    $this->user = new User($dataRow, $related_groups);
    
}

public function getAllFixedDiscounts(){

    $totalFixed = 0;

    foreach($this->user->getRelatedGroups() as $item ){

     $totalFixed += $item['fixed_discount'];

    }

    return $totalFixed;
        
}

public function getHighestVariableDiscounts(){

    $highestVariable = 0;

    foreach($this->user->getRelatedGroups() as $item ){
        
        if($item['variable_discount'] > $highestVariable) {
            $highestVariable = $item['variable_discount'];

        }
    }

    return $highestVariable;
        
}

}