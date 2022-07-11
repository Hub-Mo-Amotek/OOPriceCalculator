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

    public function findBetterDiscount()
    {

        $productPrice = $this->product->getProductPrice();
        $groupHighestVariable = $this->getHighestVariableDiscounts();
        $groupTotalFixed = $this->getAllFixedDiscounts();

        if($productPrice - $groupTotalFixed > $productPrice - ($productPrice / 100 * $groupHighestVariable)){

            return $groupHighestVariable;

        } elseif($productPrice - $groupTotalFixed < $productPrice - ($productPrice / 100 * $groupHighestVariable)){

            return $groupTotalFixed;

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

    public function finalCalculation()
    {

        $productPrice = $this->product->getProductPrice();
        $betterDiscount = $this->findBetterDiscount();

        $finalPriceGroups = $productPrice - $betterDiscount;
        $finalPriceCustomerFixed = $productPrice - $this->user->getFixedDiscount();
        $finalPriceCustomerVariable = $productPrice - $this->user->getVariableDiscount();

        var_dump($finalPriceGroups);
        var_dump($finalPriceCustomerFixed);
        var_dump($finalPriceCustomerVariable);

        if($finalPriceGroups < 0 || $finalPriceCustomerFixed < 0 || $finalPriceCustomerVariable < 0){

            return 'ITS FREE!';

        } elseif($finalPriceGroups < $finalPriceCustomerFixed && $finalPriceGroups < $finalPriceCustomerVariable){

            return $finalPriceGroups;

        } elseif($finalPriceCustomerFixed < $finalPriceGroups && $finalPriceCustomerFixed < $finalPriceCustomerVariable){

            return $finalPriceCustomerFixed;

        } elseif($finalPriceCustomerVariable < $finalPriceGroups && $finalPriceCustomerVariable < $finalPriceCustomerFixed){

            return $finalPriceCustomerVariable;

        }

    }
}






