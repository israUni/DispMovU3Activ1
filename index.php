<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app -> get('/', function (Request $request, Response $response, array $args) {

  // $data = array (
  //   'nombre' => 'Israel Eduardo Porfirio Moreno',
  //   'cuenta' => '413104120'
  // );

  // return $response->withJson($data);

  $client = new Client([
    'base_uri' => 'http://api.openweathermap.org/data/2.5/',
    // 'timeout'  => 2.0,
  ]);

  $response = $client -> request('GET', 'weather?id=3530597&APPID=11a2cc1182f522d6fd563dd9d72e111a');
  
  return $response;

});

$app->run();