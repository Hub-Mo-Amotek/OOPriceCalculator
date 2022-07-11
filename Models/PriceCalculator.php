<?php

class priceCalculator
{

    private User $user;
    private Product $product;

    public function __construct(array $userDataRow, array $related_groups, array $productDataRow)
    {

        $this->user = new User($userDataRow, $related_groups);
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
            //Look which discount (fixed or variable) will give the customer the most value.
            //TODO: find if the group variable discount or group fixed discount is better
            $productPrice = $this->product->getProductPrice() / 100;
            
            $highestDiscountVariable = $this->getHighestVariableDiscounts();
            if($highestDiscountVariable < $this->user->getVariableDiscount()) {
                $highestDiscountVariable = $this->user->getVariableDiscount();
            }

            $discountableFixed = $this->getAllFixedDiscounts();
            $priceWithFixedDiscount = $productPrice - $discountableFixed;
            
            var_dump(round($priceWithFixedDiscount - $priceWithFixedDiscount * $highestDiscountVariable / 100 ));
            return round($priceWithFixedDiscount - $priceWithFixedDiscount * $highestDiscountVariable / 100 );

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

        //TODO: with the info we have, make the right calculations
        //Now look at the discount of the customer.

        $finalPriceGroups = $this->findBetterDiscount();
        $finalFixedDiscount = round(($this->product->getProductPrice() / 100) - $this->user->getFixedDiscount());
        $finalVariableDiscount = round(($this->product->getProductPrice() / 100)) - round((($this->product->getProductPrice() / 100) * $this->user->getVariableDiscount()) / 100);

    }
}






