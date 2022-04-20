<?php

namespace App\Http\Controllers;

use DOMDocument;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class XmlController extends BaseController
{
    public function store(Request $request)
    {
        //dd($request->all());
        //instancia do doc
        $dom = new DOMDocument('1.0','UTF-8');
        $dom->formatOutPut = true;

        //Nó de ID do usuário
        $idNodeValue = $dom->createTextNode($request->Numerolote);
        $idNode = $dom->createElement('NumeroLote');
        $idNode->appendChild($idNodeValue);

        //Nó de email do usuário
        $emailNodeValue = $dom->createTextNode($request->Cnpj);
        $emailNode = $dom->createElement('Cnpj');
        $emailNode->appendChild($emailNodeValue);

        //Nó de nome do usuário
        $nameNodeValue = $dom->createTextNode($request->InscricaoMunicipal);
        $nameNode = $dom->createElement('InscricaoMunicipal');
        $nameNode->appendChild($nameNodeValue);

        //Nó de nome do usuário
        $nameNodeValue = $dom->createTextNode($request->InscricaoMunicipal);
        $nameNode = $dom->createElement('InscricaoMunicipal');
        $nameNode->appendChild($nameNodeValue);

        //Nó de usuário
        $userNode = $dom->createElement('LoteRps');
        $userNode->appendChild($idNode);
        $userNode->appendChild($emailNode);
        $userNode->appendChild($nameNode);

        //Instância do nó ROOT - Nó principal
        $rootNode = $dom->createElement('EnviarLoteRpsEnvio');
        $rootNode->appendChild($userNode);
        $dom->appendChild($rootNode);

        //imprime XML
        $xml =  $dom->saveXML();

        //$this->solicitar($xml, $request) ;  
    
    }

    public function solicitar($xmlBody, $request) 
    {
        $client = new \GuzzleHttp\Client();
        
        $create = $client->request('POST', 'https://piloto-iss.curitiba.pr.gov.br/ISSObrasWS//api/Nfe/ReceberArqu
        ivoNFe', [
            'headers' => [
                //'apptoken' => $request->apptoken,
                //'usertoken' => $request->usertoken,
            ],
            'body' => $xmlBody                         
        ]);
    }
}
