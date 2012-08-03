<?php
/**
*Delete a recipe from recipies page by using a link
*@PARAM_INT is used to bind the value for recipe id in database
* $results is used to take the output from the database for recipe ingredients as well as recipe id
*delete.php?id is used to represent the specific recipe id from database to which the user wants to delete
*@author satindersidhu <sidh0050@algonquincollege.com>
*Copyright 2012-2013 sattisidhu
*@licence APACHE https://github.com/sidh0050/web-app
*@package web-app
*@version 1.0.0

*/

require_once 'includes/db.php';

$id= filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);



$sql=$db->prepare('SELECT recipes_id,recipes_name,recipes_ingredients,recipes_directions FROM recipies WHERE id=:id');

//bind VAlue(placeholder,variables,datatype)
$sql->bindValue(':id' ,$id, PDO:: PARAM_INT);
$sql->execute();
$results=$sql->fetch();


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><title><?php $results['recipes_id']; ?>&middot; recipies</title>
</title>
</head>

<body>
<h1><?php echo $results['recipes_ingredients']; ?></h1>



<a href="delete.php?id=<?php echo $id; ?>">Delete</a>

</body>

</html>