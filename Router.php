<?php

class Router {

    private $path;
    private $routes;

    public function __construct() {
        include './routes.php';

        $this->path = $_SERVER["REQUEST_URI"];
        $this->routes = $dataRoutes;
    }

    public function executeController() {
        $dataController = $this->routes[$this->path];

        $pathController = $dataController['path'];

        $nameController = $dataController['controller'];

        $actionController = $dataController['action'];

        include $pathController;

        $Controller = new $nameController();

        $Controller->$actionController();
    }

}
