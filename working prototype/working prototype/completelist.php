<?php
$errors=array();
/*
$items=filter_input(INPUT_POST,'items',FILTER_SANITIZE_STRING);
$price=filter_input(INPUT_POST,'price',FILTER_SANITIZE_NUMBER_INT);
$checkbox=(isset($_POST['checkbox']))?1:0;




if($_SERVER['REQUEST_METHOD']=='POST'){
	if (strlen($items) <1 ||strlen($items) >256 ){
		$errors['items']=true;
	}
	
	if(!in_array($checkbox,array(0,1))){
		$errors['items']=true;
	}
	
	
	
if(empty($errors)){*/
var_dump($_POST['item']);
//var_dump($_POST['prices']);
/*require_once 'includes/db.php';

$sql =$db->query('SELECT items,price FROM lists  WHERE checkbox="1" ORDER BY items ASC');
var_dump($sql->errorInfo());*/

/*$sql->bindValue(':items',$items,PDO::PARAM_STR);
	$sql->bindValue('price',$price,PDO::PARAM_INT);
	$sql->bindValue('checkbox',$checkbox,PDO::PARAM_INT);
	$sql->execute();
	
	header('Location:lists.php');
	exit;*/
	
	//var_dump($sql->fetchAll());
	
/*	
	}
}*/

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Web application</title>
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

</ul>
</nav>
</div>


<div class="table">
<div class="butt">
<button type="Print"  onclick="javascript:print()">Print</button>		
</div>
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

<div class="footerrecipies">

<ul>
<li><a href="recipies.php"style="text-decoration: none;">Recipes</a></li>
<li>Free recipes</li>
<li>Free recipes books</li>
<li>Recipes List</li>
</ul>

</div>




</div>
</div>


</body>
</html>
