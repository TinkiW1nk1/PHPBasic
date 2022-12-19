<?php
include "../vendor/autoload.php";
use Core\Router;
use App\controllers\Home;
use App\controllers\Error;
function debug($arr)
{
  echo "<pre>";
  var_dump($arr);
  echo "</pre>";
};

$router = new Router();
$router->run();