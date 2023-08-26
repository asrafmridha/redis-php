<?php


require "vendor/autoload.php";
$redis = new Predis\Client();

$redis->set("product_store", 10);

//increment with redis
$redis->incr("product_store"); //increare 1 per run
$redis->incrby("product_store",10); //increare 10 per run

//decrement with redis
$redis->decr("product_store"); //decrement 1 per run
$redis->decrby("product_store", 10); //decrement 10 per run

echo $redis->get("product_store");
