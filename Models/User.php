<?php

class User {

    private int $id;
    private string $firstName;
    private string $lastName;
    private int $groupId;
    private $fixed_discount;
    private $variable_discount;
    private array $related_groups;
    
    public function __construct(array $userDataRow, array $related_groups){

        $this->id = $userDataRow['id'];
        $this->firstName = $userDataRow['firstname'];
        $this->lastName = $userDataRow['lastname'];
        $this->groupId = $userDataRow['group_id'];
        $this->fixed_discount = $userDataRow['fixed_discount'];
        $this->variable_discount = $userDataRow['variable_discount'];
        $this->related_groups = $related_groups;

    }

    public function getGroupId()
    {
        return $this->groupId;
    }

    public function getRelatedGroups()
    {
        return $this->related_groups;
    }

    public function getFixedDiscount()
    {
        return $this->fixed_discount;
    }

    public function getVariableDiscount()
    {
        return $this->variable_discount;
    }

    

}


