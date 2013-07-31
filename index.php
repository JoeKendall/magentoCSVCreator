<?php 	
/*
 *	Delare any settings here
*/
	error_reporting(E_ALL ^ E_NOTICE);

	date_default_timezone_set('Europe/London');
	
	//Get site wide settings
	$config = require_once 'scripts/settings.php'; 
	
	require_once $config['root'] . $config['html'] . 'scripts/functions.php'; 
	require_once $config['root'] . $config['html'] . 'app/connection/database.php'; 
	//print out the magento csv field list.
	include_once $config['root'] . $config['html'] . 'app/partials/fieldList.php';  

	$getProducts = $database->query("SELECT * FROM `mageProducts` order by id asc");
	
	while ($displayProduct = $getProducts->fetch_assoc()){ 
		//for each product, load up the price 'matrix'	
		$getPrices = $database->query("SELECT `1`,`2`,`3`,`4`,`5`,`6`,`8`,`10`,`12`,`18`,`20`,`25`,`100` FROM `magePrices` where id='".$displayProduct['id']."' limit 1")->fetch_assoc(); 
		//then get rid of any empty array keys, so we are left with the key, which is the tier, and the value, which is the price.
		$getPrices = array_filter($getPrices, create_function('$a','return trim($a)!=="";'));
		//include the per line syntax
		include $config['root'] . $config['html'] . 'app/partials/productLine.php';  
	} 
?>