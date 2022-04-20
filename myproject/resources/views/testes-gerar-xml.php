<?php 

//instancia do doc
$dom = new DOMDocument('1.0','UTF-8');
$dom->formatOutPut = true;

//Nó de ID do usuário
$idNodeValue = $dom->createTextNode(10);
$idNode = $dom->createElement('id');
$idNode->appendChild($idNodeValue);

//Nó de email do usuário
$emailNodeValue = $dom->createTextNode('test@test.com.br');
$emailNode = $dom->createElement('email');
$emailNode->appendChild($emailNodeValue);

//Nó de nome do usuário
$nameNodeValue = $dom->createTextNode('Teste teste');
$nameNode = $dom->createElement('name');
$nameNode->appendChild($nameNodeValue);

//Nó de usuário
$userNode = $dom->createElement('user');
$userNode->appendChild($idNode);
$userNode->appendChild($emailNode);
$userNode->appendChild($nameNode);

//Instância do nó ROOT - Nó principal
$rootNode = $dom->createElement('root');
$rootNode->appendChild($userNode);
$dom->appendChild($rootNode);

//imprime XML
 $xml =  $dom->saveXML();
echo $xml;  

//Salva o conteudo em um arquivo
/* $dom->save(__DIR__.'/arquivo.xml');
 */?>