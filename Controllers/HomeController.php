<?php

class HomeController {

    public function render($GET, $POST){

        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();
        $productNames = $dataSource->retrieveAllProducts();
        //$customerGroup = new CustomerGroup();
        //$fixedDiscount = $customerGroup->retrieveGroup();

        if(isset($POST['submit'])){


            if($_POST['customerId'] !== 'Customer' && $_POST['productId'] !== 'Product' && $_POST['quantity'] !== 'Quantity'){

                $customerId = $dataSource->retrieveCustomer($POST['customerId']);
                $productId = $dataSource->retrieveProduct($POST['productId']);
                $allRelatedGroups = $dataSource->retrieveAllRelatedGroups($customerId['group_id']);
                $quantity = $_POST['quantity'];

                $priceCalculator = new priceCalculator($customerId, $allRelatedGroups, $productId, $quantity);

            }
            
        }

        require 'Views/home.php';

    }

}