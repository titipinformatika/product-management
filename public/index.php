<?php
use TitipInformatika\Data\App\Routers;
use TitipInformatika\Data\Controller\HomeController;
require_once __DIR__."/../vendor/autoload.php";

Routers::add('GET','/',HomeController::class,'index');
Routers::add('GET','/about/([a-zA-Z]*)',HomeController::class,'about');


Routers::run();