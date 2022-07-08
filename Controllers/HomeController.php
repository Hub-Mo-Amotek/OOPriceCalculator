<?php

class HomeController {

    public function render(){


        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();
        $productNames = $dataSource->retrieveAllProducts();
        $customerGroup = new CustomerGroup();
        $fixedDiscount = $customerGroup->retrieveGroup();

        
        if(isset($_POST['submit'])){

            if($_POST['customerId'] !== 'Choose one' && $_POST['productId'] !== 'Choose Product'){

                $customerId = $dataSource->retrieveCustomer($_POST['customerId'])[0];
                $priceCalculator = new priceCalculator($customerId);

                $priceCalculator->printUserGroupId();

            }
            
        }

        require 'Views/home.php';

    }

}