<?php
include 'Redis.php';
$redis = new Redis();
$redis->debug=true;
$redis->nonempty='abv';
$redis->empty='';
var_dump($redis->empty);
var_dump($redis->unset);
var_dump($redis->nonempty);

// Test binary safety using UTF8 keys and data (in bulgarian)
$redis->{'КИРИЛИЦА'} = "ДА";
var_dump($redis->{'КИРИЛИЦА'});

// Test __call
var_dump($redis->zadd("zkey", 1, "one"));
var_dump($redis->zadd("zkey", 2, "two"));
var_dump($redis->zadd("zkey", 3, "three"));
var_dump($redis->zcard("zkey"));
var_dump($redis->zrevrank("zkey", "two"));