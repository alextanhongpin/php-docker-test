<?php

require 'vendor/autoload.php';


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;

$client = new Client([
    // Base URI is used with relative requests
    //'base_uri' => 'php:80',
    'base_uri' => 'http://test.com',
    // You can set any number of default request options.
		'timeout'  => 2.0,
]);

try {
    $response = $client->request('GET', '/');
    $body = $response->getBody();
    var_dump($body);
    $json_data = json_decode($body);
    print_r('SUCCESS');
    var_dump($json_data);
} catch (ConnectException $e) {
    print_r('ERROR');
    var_dump($e->getMessage());
}
