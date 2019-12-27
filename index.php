<?php

include './Router.php';
include './interface/Controller.php';

//include './routes.php';
//echo '<pre>';
//var_dump($dataRoutes); die;
//echo '</pre>';
$Router = new Router();

$Router ->executeController();

