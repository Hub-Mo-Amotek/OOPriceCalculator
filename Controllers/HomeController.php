<?php

class HomeController {

    public function render(){

        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();
        $productNames = $dataSource->retrieveAllProducts();

        if(isset($_POST['submit'])){

            if($_POST['customerId'] !== 'Choose one' && $_POST['productId'] !== 'Choose Product'){

                $customerId = $dataSource->retrieveCustomer($_POST['customerId']);
                $priceCalculator = new priceCalculator($customerId);

                $test = $dataSource->retrieveGroup($priceCalculator->getUserGroupId());
                var_dump($test);

            }
            
        }

        require 'Views/home.php';

    }

}