<?php

class HomeController {

    public function render($GET, $POST){

        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();
        $productNames = $dataSource->retrieveAllProducts();
        //$customerGroup = new CustomerGroup();
        //$fixedDiscount = $customerGroup->retrieveGroup();

        if(isset($POST['submit'])){

            if($POST['customerId'] !== 'Choose one' && $POST['productId'] !== 'Choose Product'){

                $customerId = $dataSource->retrieveCustomer($POST['customerId']);
                $productId = $dataSource->retrieveProduct($POST['productId']);
                $allRelatedGroups = $dataSource->retrieveAllRelatedGroups($customerId['group_id']);

                $priceCalculator = new priceCalculator($customerId, $allRelatedGroups, $productId);    
                
                $priceCalculator->findBetterDiscount();

            }
            
        }

        require 'Views/home.php';

    }

}