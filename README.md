PHP5 Redis
==========
php-redis contains php5 class for conenction with redis database with methods for all available commands in redis

Quick start
-----------
* Install Redis 1.0 or later: http://code.google.com/p/redis/

	tar -xvf redis-1.0.tar.gz
	cd redis-1.0
	make
	./redis-server redis.conf

* Download latest php5-redis platform from here: http://code.google.com/p/php5-redis/downloads/list
* Write some code:

	# Connecting
	$r = new Php5Redis('localhost', 6379);
	
	# Setting some value under some key
	$r->some_key = 'hello world';
	
	# Outputting it
	echo $r->some_key;