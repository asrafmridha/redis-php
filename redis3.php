<?php

require "vendor/autoload.php";
$redis = new Predis\Client();

$identity = [
    'name'      => 'Tahmina Toma',
    'address'   => "Char Afra",
    'husband'   => 'N/A',
];

// to set one by one

/* $redis->hset('identity01',  'name',     'Tahmina Toma');
$redis->hset('identity01',  'address',  'Char Afra');
$redis->hset('identity01',  'husband',  'N/A'); */

//to set all
$redis->hmset('identity01', $identity);

// to see one by one 
/* 
echo $redis->hget('identity01','name');
echo $redis->hget('identity01', 'address');
echo $redis->hget('identity01', 'husband');  */

//to see specific value
print_r($redis->hmget('identity01', ['name', 'husband']));

//to see all value
print_r($redis->hgetall('identity01'));
