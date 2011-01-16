<?php
include 'Redis.php';
$redis = new Redis();
$redis->debug=true;
$redis->nonempty='abv';
$redis->empty='';
var_dump($redis->empty);
var_dump($redis->unset);
var_dump($redis->nonempty);
