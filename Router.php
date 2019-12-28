<?php

class Router {
    private  $path;
    private  $routes;


    public function __construct() {
        include './routes.php';
        
        // path from user url examle /gallery, /login or /
        $pathInfo = $_SERVER['PATH_INFO'];
        
        if(!$pathInfo){
            $pathInfo = '/';
            
        }
        $this->path = $pathInfo;
        
        // array routes from routes.php
        $this->routes = $dataRoutes;
    }
    
    public function executeController() {
        // get array route from routes.php by path
        // examle /gallery, /login or /
       $dataController = $this->routes[$this->path];
       
       // get full path file controller
       // example ./controller/HomeController.php
       $pathController = $dataController['path'];
       
       // get name class in controller file
       // HomeController
       $nameController = $dataController['controller'];
       
       // get name function for execute
       $actionController = $dataController['action'];
       
       // connect controller file by controller path
       include $pathController;
       
       // create controller object by class
       $Controller = new $nameController();
       
       // execute controller function by name
       $Controller->$actionController();
    }
}