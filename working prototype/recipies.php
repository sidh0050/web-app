<?php
require_once 'includes/db.php';

$sql =$db->query('SELECT recipes_id,recipes_ingredients,recipes_directions FROM recipies ORDER BY recipes_id ASC');


var_dump($db->errorInfo());



$results=$sql->fetchAll();

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Recipies Page</title>
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
<div class="images">
<img src="images/noodles.jpg" alt="Noodles Image" >
<img src="images/tikka.jpg" alt="Tikka Image" >

</div>


<div class="maincontentrecipies">

<h1>Ingredients</h1>
<ol>
<li>Boneless Chicken 1 kg</li>
<li>Garlic (crushed) 2 tsp</li>
<li>Salt as per taste</li>
<li>Onions (sliced) 3 medium</li>
<li>Tomatoes (boiled and blended) 3 medium</li>
<li>Yogurt (whipped) 1/2 cup</li>
<li>Red Chilli Powder 1 tbsp</li>
<li>Salt</li>
<li>Red peeper-one</li>
<li>Green pepper-one</li>
<li>Hing-1 spoon</li>

</ol>

<h1>Directions</h1>
<p>To make the stock, boil 1/2 kg chicken bones in pot with 6-8 cups of water<br>
 until only two cups of stoke remain.To avoid heek,add one small whole pe<br>
eled onion and 2-4 black pepper corns when it comes to a boil.In a earthen<br>
ware pot,boil one onion and 1 teaspoon of garlic in the stock.</p>


<a href="add.php"><button type="submit">Add A New Recipe</button></a>


</div>


<div class="recipes">
	


<?php foreach($results as $recipes): ?>
<h2><a href="single.php?id=<?php echo $recipes['recipes_id']; ?>">
<?php echo $recipes['recipes_ingredients']; ?>
</a>
</h2>
<dl>
    <dt>recipies id</dt>
		<dd><?php echo $recipes['recipes_id']; ?></dd>
		<dt><?php echo $recipes['recipes_ingredients'];?></dt>
		<dd><?php echo $recipes['recipes_directions'];?></dd>
		
</dl>
<?php endforeach; ?>
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






</body>

</html>