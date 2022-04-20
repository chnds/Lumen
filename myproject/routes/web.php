<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//Guzzle rotas

$router->post('/guzle/post','GuzzleController@postRequest');
$router->get('/guzzle/get','GuzzleController@getRequest');

// POSTController.

$router->post('store','PostController@store');
$router->get('get','PostController@get');


// XML
$router->post('/solicitar', 'XmlController@store');

$router->get("/lerxml", function(){
    return view("testes-ler-xml");
 });

$router->get("/gerarxml", function(){
    return view("testes-gerar-xml");
 });

 //testes API REST
$router->group(['prefix' => 'courses'], function ()  use($router){
    $router->get('/', 'CourseController@index');
    $router->get('/{course}', 'CourseController@show');
    $router->post('/', 'CourseController@store');
    $router->put('/{course}', 'CourseController@update');
    $router->delete('/{course}', 'CourseControllere@destroy');
});






