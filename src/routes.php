<?php

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

$app->get('/home/[{name}]',function($request,$response,$args){
    return $this->view->render($response,'index.phtml',$args);
});

$app->get('/test','UserController:show')->setName('mt');
$app->get('/users','UserController:users')->setName('users')->add('ExampleMiddleware');