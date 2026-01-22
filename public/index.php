<?php

require_once __DIR__ . "/../vendor/autoload.php";

use ThorEngine\App\Router;

Router::add('GET', '/', 'HomeController', 'index');
Router::add('GET', '/login', 'UserController', 'login');

Router::run();
