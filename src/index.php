<?php

use Controllers\PlayerController;
use Core\Router\Request;
use Core\Router\Router;

require 'autoload.php'; // Pas toucher svp
require 'routes.php';

$router = new Router();
$router->run();
//echo "<h2>Hello Heros !</h2>";

