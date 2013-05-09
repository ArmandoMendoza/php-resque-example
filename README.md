php-resque-example
==================

Little app for test php-resque


Install
	redis-server
	composer

Update Vendor with Composer
	php composer.phar update

Start Worker
	QUEUE=* VVERBOSE=1 php bin/resque

Run app
	php main.php
