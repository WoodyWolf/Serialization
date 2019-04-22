<?php

require_once DIR.'/vendor/autoload.php';
require_once DIR.'/src/JSONStorage.php';

use App\JSONStorage;

$json = new JSONStorage();
$yaml = new \App\YAMLStorage();
$json->set('book','nad_propastiu');
$json->set('dog','corgie');
if($json->has('book')){
    $json->remove('book');
}
$data = $json->get('dog');

$yaml->set('book','nad_propastiu');
$yaml->set('dog','corgie');
//if($yaml->has('book')){
//    $yaml->remove('book');
//}

$data1 = $yaml->get('dog');

var_dump($data1 );
