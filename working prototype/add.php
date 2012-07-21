
<?php
require_once 'includes/db.php';
$errors=array();
$results = null;

$recipes_ingredients=filter_input(INPUT_POST,'recipes_ingredients',FILTER_SANITIZE_STRING);
$recipes_directions=filter_input(INPUT_POST,'recipes_directions',FILTER_SANITIZE_STRING);


if($_SERVER['REQUEST_METHOD']=='POST'){
	
		//$errors['recipes_ingredients']=true;
	}
	if(empty($recipes_directions)) {
		$errors['recipes_directions']=true;
	}
	
	
	
	if(empty($errors)){
	
	$sql = $db->prepare('INSERT INTO recipies(recipes_ingredients,recipes_directions)
	VALUES(:recipes_ingredients,:recipes_directions)');
	
	$sql->bindValue(':recipes_ingredients',$recipes_ingredients,PDO::PARAM_STR);
	$sql->bindValue(':recipes_directions',$recipes_directions,PDO::PARAM_STR);
	
	
	$sql->execute();
	
	//header('Location:recipies.php');
	//exit;
	
	
	
	}
	
	
$sql =$db->query('SELECT recipes_id,recipes_ingredients,recipes_directions FROM recipies ORDER BY recipes_id ASC');
var_dump($db->errorInfo());
$results=$sql->fetchAll();
		



?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add New recipie</title>


<link href="css/general.css" rel="stylesheet">
</head>

<body>


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




<div class="addrecipie">
<h1>Add New Recipe </h1>





<form method="post" action="add.php">

<div class="reclabel">
<label for="recipes_ingredients">
Recipies Ingredients 
<?php if(isset($errors['recipes_ingredients'])):?>
<strong class="errors">Recipes ingredients  are required</strong>
<?php endif; ?>
</label><br>

<input id="recipes_ingredients" name="recipes_ingredients" required value="<?php echo $recipes_ingredients; ?>">
</div>





<div class="reclabel">
<label for="recipes_directions">
Recipes Directions 
<?php if(isset($errors['recipes_directions'])):?>
<strong class="errors"></strong>
<?php endif; ?>
</label><br>
<input id="recipes_directions" name="recipes_directions" required value="<?php echo $recipes_directions; ?>">
</div>



<div class="cake">
<img src="images/cake.jpg" alt="cake Image" >
</div>





<div class="butt">
<button type="add">Add</button>
</div>
</form>



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





</div>


<div class="footer">
<div class="footerhome">

<ul>
<li><a href="home.php"style="text-decoration: none;">Home</a></li>
<li>Make grocery list free</li>
<li>Available items</li>
<li>Information about items</li>
</ul>

</div>

<div class="footerlists">

<ul>
<li><a href="lists.php"style="text-decoration: none;">Lists</a></li>
<li>Grocery lists</li>
<li>Different items list</li>
<li>Available items list</li>
<p>copyrightme@sattisidhu2012-2013</p>
</ul>

</div>

<div class="footerrecipies"style="text-decoration: none;">

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