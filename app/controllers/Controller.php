<?php
namespace app\controllers;

use app\views\View;

abstract class Controller
{
    protected $view;
    protected $param;
    protected $action;
    protected $data = [];

    public function __construct($action, $param = '')
    {
        $this->action = $action;
        $this->param = $param;
        $this->index();
        $this->view = new View($this->action, $this->data);
    }
    protected abstract function index();
}
