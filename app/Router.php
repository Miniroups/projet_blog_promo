<?php

namespace app;

class Router {

    public function __construct($url) {
        if ($url === '/') {
            $index = new IndexController();
        } else {
            $requestController  = ucfirst($url[0]);
            $requestAction      = isset($url[1]) ? $url[1] : '';
            $requestParam       = array_slice($url, 2);

            $ctrlPath = 'controller/'.$requestController.'.php';
        }
    }

}