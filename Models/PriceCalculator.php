<?php

class priceCalculator
{

    private User $user;
    private Product $product;

    public function __construct(array $dataRow, array $related_groups, array $productDataRow)
    {

        $this->user = new User($dataRow, $related_groups);
        $this->product = new Product($productDataRow);

    }

    // STEP 1: For the customer group: In case of variable discounts look for highest discount of all the groups the user has.
    // STEP 2: If some groups have fixed discounts, count them all up.
    public function getAllFixedDiscounts()
    {

        $totalFixed = 0;

        foreach ($this->user->getRelatedGroups() as $item) {

            $totalFixed += $item['fixed_discount'];

        }

        return $totalFixed;

    }

    public function getHighestVariableDiscounts()
    {

        $highestVariable = 0;

        foreach ($this->user->getRelatedGroups() as $item) {

            if ($item['variable_discount'] > $highestVariable) {
                $highestVariable = $item['variable_discount'];

            }
        }

        return $highestVariable;

    }

    public function getCompareFixedWithVariableCustomerGroupDiscounts()
    {
        $fixedResult = $this->getAllFixedDiscounts();
        $variableResult = $this->getHighestVariableDiscounts();


        $getProductPrice = $this->product->getProductPrice();
        if($fixedResult/$getProductPrice > $variableResult/$getProductPrice){

            return max($fixedResult, $variableResult);
        }
    }

    public function getHighestFixedDiscountCustomer()
    {
        $compareFixedDiscount = $this->getAllFixedDiscounts();
        if ($this->user->getFixedDiscount() > $compareFixedDiscount) {
            return $this->user->getFixedDiscount();
        } else {
            return $compareFixedDiscount;
        }
    }
}






