<?php
/**
*lists delete a specific recipe from database by using id
*$sql->bindValue is used to bind a value for recipe id
*@author satindersidhu <sidh0050@algonquincollege.com>
*Copyright 2012-2013 sattisidhu
*@licence APACHE https://github.com/sidh0050/web-app
*@package web-app
*@version 1.0.0
*/



require_once 'includes/db.php';

$recipes_id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

if(empty($recipes_id)){
	header('Location:recipies.php');
	exit;
}

$sql= $db->prepare('DELETE FROM recipies WHERE recipes_id=:recipes_id');
$sql->bindValue(':recipes_id',$recipes_id,PDO::PARAM_INT);
$sql->execute();


header('Location:add.php');
exit;
