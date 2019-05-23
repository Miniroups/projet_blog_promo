<?php

namespace app;

use app\controllers\HomeController;
class Router {

    public function __construct($url) {
        if ($url === '/') {
          header('Location: home/');
        } else {
            // nom du controller
            $requestedController = ucfirst($url[0]);
            // action à effectuer
            $requestedAction = isset($url[1]) ? $url[1] : '';
            // paramètres de l'action
            $requestedParams = array_slice($url, 2);
            // chemin du controller
            $ctrlPath = DIR_ROOT.'controllers/'.$requestedController.'Controller.php';
            if (file_exists($ctrlPath)) {
                $controllerName = "app\\controllers\\".$requestedController.'Controller';
                $controllerObj  = new $controllerName($requestedAction, $requestedParams);
            } else {
                throw new \Exception($ctrlPath.' : '.EXCEPTION_NOT_FOUND);
            }
        }
    }

}
