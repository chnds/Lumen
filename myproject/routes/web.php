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

//Guzzle routes

$router->post('/guzle/post','GuzzleController@postRequest');
$router->get('/guzzle/get','GuzzleController@getRequest');

// Armazenamento e leitura de requisições.

$router->post('store','PostController@store');
$router->get('get','PostController@get');


//Routas XML

$router->get("/lerxml", function(){
    return view("testes-ler-xml");
 });

$router->get("/gerarxml", function(){
    return view("testes-gerar-xml");
 });

$router->post('/solicitar', 'XmlController@store');
 
$router->group(['prefix' => 'courses'], function ()  use($router){
    $router->get('/', 'CourseController@index');
    $router->get('/{course}', 'CourseController@show');
    $router->post('/', 'CourseController@store');
    $router->put('/{course}', 'CourseController@update');
    $router->delete('/{course}', 'CourseControllere@destroy');
});



//Routas NF-S

/*  $router->post('/testar','GuzzleController@TestCertificate');
 $router->post('/consultar','GuzzleController@Consultar');
 $router->post('/cancelar','GuzzleController@Cancelar');
 $router->post('/finalizar','GuzzleController@Finalizar');
 $router->post('/criar','GuzzleController@Criar');
 $router->post('/vincular','GuzzleController@VincularProdutos');
 $router->post('/consultar','GuzzleController@ConsultarProdutoAquisicao');
 $router->post('/dados','GuzzleController@Dados');
 $router->post('/receber','GuzzleController@ReceberArquivoNFe'); */



