<?php

class HomeController {

    public function render(){

        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();
        $productNames = $dataSource->retrieveAllProducts();

        if(isset($_POST['submit'])){

            if($_POST['customerId'] !== 'Choose one' && $_POST['productId'] !== 'Choose Product'){

                $customerId = $dataSource->retrieveCustomer($_POST['customerId']);
                $allRelatedGroups = $dataSource->retrieveAllRelatedGroups($customerId['group_id']);

                $priceCalculator = new priceCalculator($customerId, $allRelatedGroups);

                $priceCalculator->getAllFixedDiscounts();
                $priceCalculator->getHighestVariableDiscounts();

            
            }
            
        }

        require 'Views/home.php';

    }

}