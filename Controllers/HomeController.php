<?php

class HomeController {

    public function render(){


        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();
        $productNames = $dataSource->retrieveAllProducts();
        $customerGroup = new CustomerGroup();
        $fixedDiscount = $customerGroup->retrieveGroup();

        require 'Views/home.php';

    }

}