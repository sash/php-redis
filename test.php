<?php
include 'Php5Redis.php';
$redis = new Php5Redis();
$redis->debug=1;
$redis->nonempty='abv';
$redis->empty='';
var_dump($redis->empty);
var_dump($redis->unset);
var_dump($redis->nonempty);
