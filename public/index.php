<?php
use app\autoload;

require '../app/Autoload.php';

Autoload::register();
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';
$router = new Router();
