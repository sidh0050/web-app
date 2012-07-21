<?php 
$possible_information=array(
'Working inquiries'
,'Working Hours'
,'Working Employeers'
);
require_once 'includes/form-processor.php';
?>



<!DOCTYPE HTML>
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
<link href="css/general.css" rel="stylesheet">

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
<h1>Thanks for making Grocery list with sidhuz grocery Store</h1><br>
<p>Below are the best pre-formatted grocery lists ever created
. I made them just for you — and they’re free. Print ‘em out, 
hang ‘em on the refrigerator door and mark ‘em up before you
 go to the grocery store. We have comprehensive versions for 
 both meat-eaters and vegetabletarians.And it just got better.
  I just posted a fully-editable PDF version of the Deluxe list
	. That means that if you don’t have pets or kids, for example,
	 you can edit those sections to be something else. If an item 
	 wasn’t on my pre-formatted list, now you can add it then print
	  it out. How awesome is that? Freely available PDF reader soft
		ware is required and no customer support is offered. If you
		 want to permanently edit the customizable file you will need
		  to buy Adobe Acrobat. Otherwise, edit it as you need then 
			print it a bunch of copies. Enjoy!</p>
<form>
<label for="email"><strong>E-Mail address</strong><?php if(isset($errors['email'])): ?><strong class="error"></strong><?php endif;?></label>
<input type="email" id="email" name="email" required value="<?php echo $email;?>"><br>







<label for="User name"><strong>User Name</strong><?php if(isset($errors['User name'])): ?><strong class="error"></strong><?php endif;?></label>
<input id="User name" name="User name" required value="<?php echo $Username; ?>"><br>


<label for="message"><strong>Message</strong><?php if(isset($errors['message'])): ?><strong class="error">Your message must be 5 to 100 characters long.</strong><?php endif;?></label>
<textarea id="message" name="message" ><?php echo $message;?></textarea><br>




<div class="butt">
<button value="submit"  onclick="location.href='home.php'">Register My Information </button><br>
<button type="cancel" onclick="location.href='home.php'">Cancel</button>

</div>


</form>
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

<div class="contactfooterrecipies">

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