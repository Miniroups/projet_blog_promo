<?php
namespace app\controllers;

use app\views\View;

abstract class Controller
{
    protected $view;
    protected $param;
    protected $template;
    protected $data = [];
    protected $model;

    public function __construct($action, array $param = [])
    {
        // paramètre le template comme l'action par défaut
        $this->template = $action;
        // récupération des paramètres
        $this->param = $param;
        // test si l'action est valide sinon index
        if (!method_exists($this,$action)) {
          $action = 'index';
        }
        // instancie la méthode lier à l'action
        $this->$action($param);
        // instancie la vue
        $this->view = new View($this->template, $this->data);
    }
    protected abstract function index();
}
