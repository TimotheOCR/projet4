<?php
    require 'vendor/autoload.php'; 
    use Controllers\Router;

    $router = new Router();
    $router->routReq();
    
?>
