<?php
$client = new GuzzleHttp\Client([
        'base_uri' => 'https://fr.openfoodfacts.org/categorie/',
    ]
);
var_dump($client);
$response = $client->request('GET', 'marshmallows');
var_dump($response);
$body = $response->getBody();
var_dump($body);
echo $body->getContents();
?>