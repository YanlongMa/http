<?php

// require  __DIR__ .'/../vendor/autoload.php';

require __DIR__ . '/../src/ClassLoader.php';
\PFinal\Http\ClassLoader::register();

$client = new \PFinal\Http\Client();

$response = $client->get('http://www.baidu.com');

var_dump($response->getStatusCode());

var_dump($response->getTransferInfo());

echo '<br>';

$body = $response->getBody();
echo nl2br(htmlspecialchars($body));

