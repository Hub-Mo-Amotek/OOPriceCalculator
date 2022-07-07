<?php

class HomeController {

    public function render(){

        $user = new User('Mo', 'Le');
        $data = $user->retrieveCustomers();

        var_dump($data);

        require 'Views/home.php';

    }

}