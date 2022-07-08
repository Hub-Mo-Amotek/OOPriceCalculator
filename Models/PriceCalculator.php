<?php

class priceCalculator {

private User $user;

public function __construct(array $dataRow){

    $this->user = new User($dataRow);
    
}

public function printUserGroupId(){

    var_dump($this->user->getGroupId());
        
}

}