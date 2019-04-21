<?php
	session_start();
	define('SERVER', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'class1901');
	define('SALT', '!7U%78');
	define('TOKEN', md5(rand(1, 1000)));
	define('DEVELOPMENT', true);
	if(DEVELOPMENT){
		define('URL', 'http://localhost/class1901project/');
	}
	else {
		define('URL', '');
	}
	
	
	