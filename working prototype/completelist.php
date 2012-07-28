<?php

$errors=array();

//var_dump($_POST['item']);


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Web application</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body>


<body>
<div class="all">

<div class="logo">
<img src="images/logo.jpg" alt="Logo Image" >


</div>
<div class="img">
<h1>Sidhuz Grocery List</h1>

<div class="navigation">
<nav>
<ul>

 <li><a href="home.php" style="text-decoration: none;">Home</a></li>
<li><a href="lists.php" style="text-decoration: none;">Lists</a></li>
<li><a href="recipies.php" style="text-decoration: none;">Recipes</a></li>
<li><a href="contact.php" style="text-decoration: none;">Contact</a></li>

</ul>
</nav>
</div>


<div class="table">

<table border="5">
<tr>
<th>Items</th>
<th>Price</th>
</tr>
<?php
	foreach ($_POST['item'] as $item) :
		$pieces = explode('{-+-}', $item);
?>
<tr>
	<td><?php echo $pieces[0]; ?></td>
	<td><?php echo $pieces[1]; ?></td>
</tr>
<?php endforeach; ?>
</table>

<div class="butt">
<button type="Print"  onclick="javascript:print()">Print</button>		
</div>





</div>




</div>


</body>
</html>
