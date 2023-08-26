<?php

use Predis\Client;

require "vendor/autoload.php";
$redis = new Client();

//redis set key value
$redis->set("name", "Tahmina Toma");

// redis expire time with second 
$redis->expire("name", 30);

//redis set array with json_encode ...without json_encode it's not possible
$redis->set('user1',json_encode([
    "name"  => "Tahmina Toma",
    "email" => "tahminatoma@gmail.com"
]));

// to see with associative array 
print_r(json_decode($redis->get("user1"),true));

//redis get key value
echo $redis->get("name");

//redis delete 
$redis->del("name");
