<?php
require __DIR__.'/vendor/autoload.php';

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->get('/', function(){
	return "API";
});

$app->get('/hello/{name}', function($request, $response){
	
	$name = $request->getAttribute('name');
	$response->getBody()->write("Olá, {$name}");
	return $response;

});

$app->run();
?>