<?php
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