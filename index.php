<?php 
require 'vendor/autoload.php';
use Core\Router;
$obj = new Router();
echo $obj->run();
?>