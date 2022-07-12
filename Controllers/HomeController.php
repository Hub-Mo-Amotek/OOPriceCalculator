<?php

class HomeController {

    public function render(){

        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();
        $productNames = $dataSource->retrieveAllProducts();
        //$customerGroup = new CustomerGroup();
        //$fixedDiscount = $customerGroup->retrieveGroup();

        if(isset($_POST['submit'])){

            if($_POST['customerId'] !== 'Choose one' && $_POST['productId'] !== 'Choose Product' && $_POST['quantity'] !== 'Choose Product'){

                $customerId = $dataSource->retrieveCustomer($_POST['customerId']);
                $productId = $dataSource->retrieveProduct($_POST['productId']);
                $allRelatedGroups = $dataSource->retrieveAllRelatedGroups($customerId['group_id']);
                $quantity = $_POST['quantity'];

                $priceCalculator = new priceCalculator($customerId, $allRelatedGroups, $productId, $quantity);
                
                $priceCalculator->finalCalculation();
                $priceCalculator->findBetterDiscount();
                var_dump($quantity);

            }
            
        }

        require 'Views/home.php';

    }

}