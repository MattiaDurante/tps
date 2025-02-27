<?php

$options = array(
    'location' => "http://localhost/soapserver.php", 
    'uri' => "http://localhost/"
);

$client = new SoapClient(null, $options);

echo $client->sayHello("Davide");
?>
