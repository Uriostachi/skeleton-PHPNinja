<?php
 
require '../vendor/autoload.php';

$kernel = new Yoop\Kernel();


$router = $kernel->getRouter();
$router->load(
    include dirname(__DIR__) . '/app/routes.php'
);
$router->run($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);