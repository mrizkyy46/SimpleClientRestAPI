<?php

require __DIR__ . '/vendor/autoload.php';

use \GuzzleHttp\Client;

$client = new Client(['headers' => ['Accept' => '*/*', 'Content-Type' => 'application/json']]);

$response = $client->request('POST', @$_POST['url'], [
    'body' => @$_POST['reqbody']
]);

echo $response->getBody()->getContents();
