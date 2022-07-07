<?php
declare(strict_types=1);

//Require Models
require 'Models/User.php';

//Require Controllers
require 'Controllers/HomeController.php';

//Instantiate a new default Controller
$controller = new HomeController();

if(isset($_GET['page']) && $_GET === "info"){
    $controller = new InfoController();
}

//Tell the controller to display a view by calling the render function
$controller->render();