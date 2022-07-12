<?php

class priceCalculator
{

    private User $user;
    private Product $product;
    private Quantity $quantity;

    public function __construct(array $userDataRow, array $related_groups, array $productDataRow, int $quantity)
    {

        $this->user = new User($userDataRow, $related_groups);
        $this->product = new Product($productDataRow);
        $this->quantity = new Quantity($quantity);

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
        $productPrice = ($this->product->getProductPrice() / 100);
            
        $highestDiscountVariable = $this->getHighestVariableDiscounts();
        $discountableFixed = $this->getAllFixedDiscounts();

        if($highestDiscountVariable < $this->user->getVariableDiscount()) {
                $highestDiscountVariable = $this->user->getVariableDiscount();
            }


        $calculatedpriceFixed = $productPrice - $discountableFixed;
        $gettingVariablePercentage = ($productPrice * $highestDiscountVariable) /100;
        $calculatedPriceVariable = $productPrice - $gettingVariablePercentage;
        //$priceWithBestDiscount = $productPrice - $discountableFixed;
        if($calculatedPriceVariable > $calculatedpriceFixed){
            return $calculatedpriceFixed;
        }else {
            return $gettingVariablePercentage;
        }

    }

    public function finalCalculation()
    {
        //TODO: with the info we have, make the right calculations
        //Now look at the discount of the customer.
        $productPrice = ($this->product->getProductPrice() / 100);
        if ($this->user->getFixedDiscount()) {
            $firstFixed = $productPrice - $this->user->getFixedDiscount();
            $finalPrice = $firstFixed - $this->findBetterDiscount();
            var_dump($finalPrice);
            return $finalPrice;
        }else {
            $finalVariableGroupsDiscount = round($this->findBetterDiscount());
            var_dump($finalVariableGroupsDiscount);
            return $this->findBetterDiscount();
        }

        //$finalFixedDiscount = round(($this->product->getProductPrice() / 100) - $this->user->getFixedDiscount());
        //$finalVariableDiscount = round(($this->product->getProductPrice() / 100)) - round((($this->product->getProductPrice() / 100) * $this->user->getVariableDiscount()) / 100);

    }

    public function getBaseInfo(){

        //$customerName = $this->user->

        $baseProductPrice = $this->product->getProductPrice() / 100;
        $quantity = $this->quantity->getQuantity();

        $customerFixed = $this->user->getFixedDiscount();
        $customerVariable = $this->user->getVariableDiscount();

        $totalGroupFixed = $this->getAllFixedDiscounts();
        $highestGroupVariable = $this->getHighestVariableDiscounts();



        $baseInfo = ["baseProductPrice" => $baseProductPrice, "quantity" => $quantity, "customerFixed" => $customerFixed, "customerVariable" => $customerVariable, "totalGroupFixed" => $totalGroupFixed, "highestGroupVariable" => $highestGroupVariable];
        foreach($baseInfo as $key => $info){
            if(!$info){
                $baseInfo[$key] = "N/A";
            }
        }

        return $baseInfo;

    }

}






