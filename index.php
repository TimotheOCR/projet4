<?php

    require 'vendor/autoload.php'; 
    use Controllers\Router;
    use Models\UtilisateurManager;



    $router = new Router();
    $router->routReq();

