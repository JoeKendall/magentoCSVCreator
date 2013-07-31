<?php
	function createUrl($title){
	
		$createUrl = preg_replace("/[^A-Za-z0-9 ]/", '', $title);
		$createUrl = preg_replace('/\\s+/', '-', $createUrl);
		$createUrl = strtolower($createUrl);
		
		return $createUrl;
	} 
?>