<?php
require_once 'includes/db.php';

$sql =$db->query('SELECT id,Price,Items FROM lists ORDER BY id ASC');


var_dump($db->errorInfo());



$results=$sql->fetchAll();

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
<h1>Sidhuz Grocery List</h1>
</div>

<div class="navigation">
<nav>
<ul>

 <li><a href="home.php" style="text-decoration: none;">Home</a></li>
<li><a href="lists.php" style="text-decoration: none;">Lists</a></li>
<li><a href="recipies.php" style="text-decoration: none;">Recipes</a></li>
<li><a href="contact.php" style="text-decoration: none;">Contact</a></li>
</nav>
</ul>
</div>


<form method="post" action="completelist.php">
	




	
	
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/form-validation.js"></script>
		</div>
		<div class="table">
<div class="butt">
<button value="Create your Grocery List" >Create your Grocery List </button>
</div>
<p><strong>Please select your grocery items</strong></p>

<table border="5">
<tr>
<th>Items</th>
<th>Price</th>
</tr>

<?php foreach($results as $lists): ?>


<tr>
    <td><input type="checkbox" name="item[]" value="<?php echo $lists['Items'];?>{-+-}<?php echo $lists['Price'];?>"  /><?php echo $lists['Items'];?></td>
	<td><?php echo $lists['Price'];?></td>		
</tr>
<?php endforeach; ?>
</table>


	</form>
	</div>
<div class="footer">
<div class="footerhome">

<ul>
<li><a href="home.php">Home</a></li>
<li>Make grocery list free</li>
<li>Available items</li>
<li>Information about items</li>
</ul>

</div>

<div class="footerlists">

<ul>
<li><a href="lists.php">Lists</a></li>
<li>Grocery lists</li>
<li>Different items list</li>
<li>Available items list</li>
<p>copyrightme@sattisidhu2012-2013</p>
</ul>
</div>
<div class="footerrecipies">
<ul>
<li><a href="recipies.php">Recipes</a></li>
<li>Free recipes</li>
<li>Free recipes books</li>
<li>Recipes List</li>
</ul>
</div>
</div>
 </div>
</body>
</html>
