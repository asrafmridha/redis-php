<?php

use Predis\Client;

require "vendor/autoload.php";
$redis = new Client();

//redis set key value
$redis->set("name", "Tahmina Toma");

//redis get key value
echo $redis->get("name");

//redis delete 
$redis->del("name");
