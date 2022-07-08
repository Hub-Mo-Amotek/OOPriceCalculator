<?php

class HomeController {

    public function render(){


        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();
        $productNames = $dataSource->retrieveAllProducts();

        require 'Views/home.php';

    }

}