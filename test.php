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



// Pipeline test
echo "---Pipeline test\n";
$s = microtime(true);
$redis->pipeline_begin();
var_dump($redis->set("pipeline1", "val1"));
var_dump($redis->set("pipeline2", "val2"));
var_dump($redis->set("pipeline3", "val3"));
var_dump($redis->set("pipeline4", "val4"));
var_dump($redis->set("pipeline5", "val5"));
var_dump($redis->get("pipeline2"));
var_dump($redis->pipeline_responses());
echo "Time: ".(microtime(true)-$s)."\n";

echo "---No pipeline test\n";
$s = microtime(true);
//$redis->pipeline_begin();
var_dump($redis->set("pipeline1", "val1"));
var_dump($redis->set("pipeline2", "val2"));
var_dump($redis->set("pipeline3", "val3"));
var_dump($redis->set("pipeline4", "val4"));
var_dump($redis->set("pipeline5", "val5"));
var_dump($redis->get("pipeline2"));
//var_dump($redis->pipeline_responses());
echo "Time: ".(microtime(true)-$s)."\n";

var_dump($redis->set('postpipeline1', 'v1'));
