<?php 
$possible_information=array(
'Working inquiries'
,'Working Hours'
,'Working Employeers'
);
require_once 'includes/form-processor.php';
?>
<?php
$errors = array();
$display_thanks = false;

$name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$message = filter_input(INPUT_POST,'message', FILTER_SANITIZE_STRING);




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (empty($username)) {
$errors['username'] = true;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$errors['email'] = true;
}

if (mb_strlen($message) < 25) { 
$errors['message'] = true;
}

if (empty($terms)) {
$errors['terms'] = true;
}

if (empty($errors)) {
$display_thanks = true;

$username_message = 'Name: ' . $name . "\r\n"; // "\r\n" is a new line in an e-mail
$email_message .= 'Email: ' . $email . "\r\n";
$message_message .= "Message:\r\n" . $message;

$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";

mail('sattisidhu.kaur7@gmail.com', $subject, $email_message, $headers);

}
}
?>



<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Web Application</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body>

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
<h2>Thanks for making Grocery list with sidhuz grocery Store</h2>
<p>Below are the best pre-formatted grocery lists ever created
I made them just for you — and they’re free. Print ‘em out, 
hang ‘em on the refrigerator door and mark ‘em up before you
go to the grocery store. We have comprehensive versions for 
both meat-eaters and vegetabletarians.And it just got better.
I just posted a fully-editable PDF version of the Deluxe list
.That means that if you don’t have pets or kids, for example,
you can edit those sections to be something else. If an item 
wasn’t on my pre-formatted list, now you can add it then print
it out. How awesome is that? Freely available PDF reader soft
ware is required and no customer support is offered. If you
want to permanently edit the customizable file you will need
to buy Adobe Acrobat. Otherwise, edit it as you need then 
print it a bunch of copies. Enjoy!</p>
</div>
<form>
<div class="conlabel">

<label for="email"><strong>E-Mail address</strong><?php if(isset($errors['email'])): ?><strong class="error"></strong><?php endif;?></label>
<input type="email" id="email" name="email" required value="<?php echo $email;?>"><br>







<label for="User name"><strong>User Name</strong><?php if(isset($errors['username'])): ?><strong class="error"></strong><?php endif;?></label>
<input id="User name" name="User name" required value="<?php echo $username; ?>"><br>


<label for="message"><strong>Message</strong><?php if(isset($errors['message'])): ?><strong class="error">Your message must be 5 to 100 characters long.</strong><?php endif;?></label>
<input id="message" name="message"required value="<?php echo $message;?>"><br>



</div>
<div class="butt">
<button value="submit"  onclick="location.href='home.php'">Register My Information </button><br>
<button type="cancel" onclick="location.href='home.php'">Cancel</button>
</div>





</form>












</div>
</body>
</html>