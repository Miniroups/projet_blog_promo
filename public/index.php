<?php
use app\autoload;
use app\Router;

session_start();
// session_destroy();
require '../app/Autoload.php';

Autoload::register();
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';
$router = new Router($url);
