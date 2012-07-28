<?php
/**
$item_chunks method is used to divide the table into various parts according to requirement
$sql =$db->query method is used to fetch data regarding to lists page from web-app
*@author satindersidhu <sidh0050@algonquincollege.com>
*Copyright 2012-2013 sattisidhu
*@licence APACHE https://github.com/sidh0050/web-app
*@package web-app
*@version 1.0.0

*/
require_once 'includes/db.php';

$sql =$db->query('SELECT id,Price,Items FROM lists ORDER BY id ASC');


//var_dump($db->errorInfo());



$results=$sql->fetchAll();
$total_items = count($results);

$item_chunks = array_chunk($results, ceil($total_items / 3));
//var_dump(count($item_chunks));
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Web Application</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body>
<div class="all">
<div class="logo">
<img src="images/logo.jpg" alt="Logo Image" >

</div>

<div class="navigation">
<div class="img">
<h1>Sidhuz Grocery List</h1>
<nav>
<ul>

 <li><a href="home.php" style="text-decoration: none;">Home</a></li>
<li><a href="lists.php" style="text-decoration: none;">Lists</a></li>
<li><a href="recipies.php" style="text-decoration: none;">Recipes</a></li>
<li><a href="contact.php" style="text-decoration: none;">Contact</a></li>
</ul>
</nav>




<form method="post" action="completelist.php">
	




	
	
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/form-validation.js"></script>
		
		<div class="table">

<p><strong>Please select your grocery items</strong></p>

<?php foreach ($item_chunks as $results) : ?>
<table border="5">
<tr>
<th>Items</th>
<th>Price</th>
</tr>

<?php foreach($results as $lists): ?>
<tr>
    <td><input type="checkbox" name="item[]" value="<?php echo $lists['Items'];?>{-+-}<?php echo '$'.$lists['Price'];?>"  /><?php echo $lists['Items'];?></td>
	<td><?php echo $lists['Price'];?></td>		
</tr>
<?php endforeach; ?>
</table>

<?php endforeach; ?>


</div>
<div class="buttr">
<button value="Create your Grocery List" >Create your Grocery List </button>
</div>
	
</form>

</div>

 </div>
 </div>
</body>
</html>
