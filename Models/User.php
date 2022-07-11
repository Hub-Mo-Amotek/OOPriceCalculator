<?php

class User {

    private int $id;
    private string $firstName;
    private string $lastName;
    private int $groupId;
    private $fixed_discount;
    private $variable_discount;
    private array $related_groups;
    
    public function __construct(array $dataRow, array $related_groups){

        $this->id = $dataRow['id'];
        $this->firstName = $dataRow['firstname'];
        $this->lastName = $dataRow['lastname'];
        $this->groupId = $dataRow['group_id'];
        $this->fixed_discount = $dataRow['fixed_discount'];
        $this->variable_discount = $dataRow['variable_discount'];
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


