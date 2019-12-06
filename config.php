<?php
require 'environment.php';

global $config;
$config = array();

if(ENVIRONMENT == 'development') {
	define('BASE', 'http://localhost/phpzp/crud_mvc');
	$config['dbname'] = 'crud_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define('BASE', 'http://www.meusite.com.br');
	$config['dbname'] = 'crud_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

?>
