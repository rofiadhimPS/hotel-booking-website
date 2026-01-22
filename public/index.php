<?php

require_once __DIR__ . "/../vendor/autoload.php";

use ThorEngine\App\Router;
use ThorEngine\Controller\HomeController;
use ThorEngine\Controller\PageController;

Router::add('GET', '/', HomeController::class, 'index');

Router::add('GET', '/rooms', PageController::class, 'rooms');
Router::add('GET', '/about', PageController::class, 'about');
Router::add('GET', '/contact', PageController::class, 'contact');
Router::add('GET', '/facilities', PageController::class, 'facilities');



Router::run();
