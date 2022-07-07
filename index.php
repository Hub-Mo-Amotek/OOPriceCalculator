<?php
declare(strict_types=1);

require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//Require Models
require 'Models/DataSource.php';
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
