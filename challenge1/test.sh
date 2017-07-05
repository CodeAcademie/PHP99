#!/usr/bin/env bash
if [ ! -f phpunit.phar ]; then
	wget https://phar.phpunit.de/phpunit.phar
	chmod +x phpunit.phar
fi
php phpunit.phar --bootstrap result.php resultTest.php > phpunit.log
head -n3 phpunit.log
tail -n1 phpunit.log
