<?php

include './Router.php';
include './interface/Controller.php';

$Router = new Router();

include './view/header.php';

// include dinamic content page
$Router->executeController();

include './view/footer.php';

