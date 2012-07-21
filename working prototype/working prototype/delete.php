<?php

require_once 'includes/db.php';

$recipes_id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

if(empty($recipes_id)){
	header('Location:recipies.php');
	exit;
}

$sql= $db->prepare('DELETE FROM recipies WHERE recipes_id=:recipes_id');
$sql->bindValue(':recipes_id',$recipes_id,PDO::PARAM_INT);
$sql->execute();


header('Location:recipies.php');
exit;
