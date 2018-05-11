<?php

session_start();

require '../vendor/autoload.php';

// Estoy trayendo la configuracion de Slim a traves de la variable $settings
$settings=require __DIR__.'/../src/settings.php';

$app = new Slim\App($settings);

require __DIR__.'/../src/dependencies.php';
require __DIR__.'/../src/routes.php';



$app->run();