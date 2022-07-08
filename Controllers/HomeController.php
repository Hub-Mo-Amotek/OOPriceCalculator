<?php

class HomeController {

    public function render(){


        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();
        $productNames = $dataSource->retrieveAllProducts();

        if(isset($_POST['submit'])){

            echo 'form submitted';

        }

        require 'Views/home.php';

    }

}