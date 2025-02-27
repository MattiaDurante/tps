<?php


class HelloWorldService {
    public function sayHello($name) {
        return "Ciao, " . $name . "! Benvenuto nel servizio SOAP!";
    }
}

$options = array('uri' => "http://localhost/");

$server = new SoapServer(null, $options);

$server->setClass("HelloWorldService");

$server->handle();
?>
