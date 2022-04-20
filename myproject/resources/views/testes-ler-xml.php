<?php

//string xml

$string = '<?xml version="1.0" encoding="UTF-8"?>
<root>
	<user>
		<id>10</id>
		<email>test@test.com.br</email>
		<name>Teste teste</name>
	</user>
</root>';
    
    //carrega xml com base em string

    $xml = simplexml_load_string($string);

    echo "<pre>";
    print_r($xml);
    echo "<pre>";exit; 

    //Carrega xml com base em um arquivo
    //$xml = simplexml_load_file(__dir__,'/arquivo.xml');

   /*  echo 'ID:' .$xml->user->id."\n";
    echo 'Nome:' .$xml->user->name."\n";
    echo 'E-mail:' .$xml->user->email."\n"; */

    ?>
