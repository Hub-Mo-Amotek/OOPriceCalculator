<?php

class HomeController {

    public function render($GET, $POST){

        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();
        $productNames = $dataSource->retrieveAllProducts();
        //$customerGroup = new CustomerGroup();
        //$fixedDiscount = $customerGroup->retrieveGroup();

        if(isset($POST['submit'])){


            if($_POST['customerId'] !== 'Choose one' && $_POST['productId'] !== 'Choose Product' && $_POST['quantity'] !== 'Choose Product'){

                $customerId = $dataSource->retrieveCustomer($POST['customerId']);
                $productId = $dataSource->retrieveProduct($POST['productId']);
                $allRelatedGroups = $dataSource->retrieveAllRelatedGroups($customerId['group_id']);
                $quantity = $_POST['quantity'];

                $priceCalculator = new priceCalculator($customerId, $allRelatedGroups, $productId, $quantity);
                
                $priceCalculator->findBetterDiscount();
                var_dump($quantity);

            }
            
        }

        require 'Views/home.php';

    }

}