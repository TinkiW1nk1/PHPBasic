<?php
include "../vendor/autoload.php";
include "../core/libs/funcs.php";
use Core\Router;
use App\controllers\Home;
use App\controllers\Error;

$router = new Router();
$router->run();
