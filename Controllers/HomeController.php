<?php

class HomeController {

    public function render(){


        $dataSource = new DataSource();
        $customerNames = $dataSource->retrieveAllCustomerNames();

        var_dump($customerNames);

        require 'Views/home.php';

    }

}