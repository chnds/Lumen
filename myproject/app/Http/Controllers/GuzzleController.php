<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use Laravel\Lumen\Routing\Controller as BaseController;

class GuzzleController extends BaseController
{

    public function postRequest() //Teste requisição via POST
    {
        $client = new \GuzzleHttp\Client(["base_uri" => "http://httpbin.org"]);
        $options = [
            'json' => [
                "fruit" => "apple"
               ]
           ]; 
        $response = $client->post("/post", $options);
        
        echo $response->getBody();
    }

    public function getRequest() //Teste de requisição via GET
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('https://api.github.com/users/chnds');
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
    }

    public function TestCertificate() //Testar certificado
    {
        $client = new \GuzzleHttp\Client(["base_uri" => "http://httpbin.org"]);
        $options = [
            'json' => [
                "fruit" => "apple"
               ]
           ]; 
        $response = $client->post("/post", $options);
        
        echo $response->getBody();
    }
}
