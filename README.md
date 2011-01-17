PHP5 Redis
==========
php-redis contains php5 class for conenction with redis database with methods for all available commands in redis

Quick start
-----------
* Install Redis from [redis.io](http://redis.io/download "Redis")

		tar -xvf redis-1.0.tar.gz
		cd redis-1.0
		make
		./redis-server redis.conf

* Download latest php-redis class from [here](https://github.com/sash/php-redis/archives/master)
* Write some code:

		# Connecting
		$r = new Php5Redis('localhost', 6379);
		
		# Setting some value under some key
		$r->some_key = 'hello world';
		
		# Outputting it
		echo $r->some_key;