<?php

class HomeController {

    public function render($GET, $POST){

        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();
        $productNames = $dataSource->retrieveAllProducts();

        if(isset($POST['submit'])){


            if($POST['customerId'] !== 'Customer' && $POST['productId'] !== 'Product' && $POST['quantity'] !== 'Quantity'){

                $customerId = $dataSource->retrieveCustomer($POST['customerId']);
                $productId = $dataSource->retrieveProduct($POST['productId']);
                $allRelatedGroups = $dataSource->retrieveAllRelatedGroups($customerId['group_id']);
                $quantity = $_POST['quantity'];

                $priceCalculator = new priceCalculator($customerId, $allRelatedGroups, $productId, $quantity);
                
                $baseInfo = $priceCalculator->getBaseInfo();

                $priceCalculator->finalCalculation();


            }
            
        }

        require 'Views/home.php';

    }

}