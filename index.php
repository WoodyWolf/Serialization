<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/src/JSONStorage.php';

use App\JSONStorage;

$json = new JSONStorage();

$json->set('book','nad_propastiu');
$json->set('dog','corgie');
if($json->has('book')){
    $json->remove('book');
}
$data = $json->get('dog');

var_dump($data);
