<?php

session_start();

require '../vendor/autoload.php';

// Estoy trayendo la configuracion de Slim a traves de la variable $settings
$settings=require __DIR__.'/../src/settings.php';

$app = new Slim\App($settings);

require __DIR__.'/../src/dependencies.php';

$app->get('/',function( $request,$response,$args){
    $type=gettype($request);  //object
    $class=get_class($request); //Slim\Http\Request
    $methods=get_class_methods($request); 
    // var_dump([$type,$class,$methods]);
    $this->logger->addInfo('In home');
    return $response->write('Welcome to home');
});

$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->getBody()->write("Hello, " . $args['name']);
});

$app->run();