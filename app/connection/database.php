<?php
	//create new connection 'object'
	$database = new mysqli($config['host'], $config['user'], $config['pass'], $config['db']);
	
	//if error, display!
	if($database->connect_errno > 0) die('Unable to connect to database [' . $database->connect_error . ']');
