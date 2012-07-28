<?php
/**
*PARAM_STR method is used to bind values for items for my lists page items
$results method is used to display an error message if no one items are selected from lists
*@author satindersidhu <sidh0050@algonquincollege.com>
*Copyright 2012-2013 sattisidhu
*@licence APACHE https://github.com/sidh0050/web-app
*@package web-app
*@version 1.0.0
*/
	require_once 'includes/db.php';
	
	$username = filter_input(INPUT_POST, 'Items', FILTER_SANITIZE_STRING);
	
	$sql = $db->prepare('
		SELECT id
		FROM lists
		WHERE Items = :Items
	');
	
	$sql->bindValue(':Items', $Items, PDO::PARAM_STR);
	$sql->execute();
	$results = $sql->fetch();
	
	if(empty($results)){
		echo 'available';
	}
	else{
		echo 'unavailable';
	}
?>