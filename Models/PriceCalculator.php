<?php

class priceCalculator {

private User $user;

public function __construct(array $dataRow){

    $this->user = new User($dataRow);
    
}

public function getUserGroupId(){

    return $this->user->getGroupId();
        
}

}