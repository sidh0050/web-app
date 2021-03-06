<?php 


/**

*if($_SERVER['REQUEST_METHOD']== 'POST') method is used to display error messages for contact page of web-app.
*$headers ='From:=' .$name. '<' .$email. '>'; method is used to received mail from end users in my account regarding my web-app.
*Add button is used to add a new recipe in the database
*Copyright 2012-2013 sattisidhu
*@licence APACHE https://github.com/sidh0050/web-app
*@package web-app
*@version 1.0.0
*/
$errors=array();

$name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);

$email =filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

$Username = filter_input(INPUT_POST, 'Username',FILTER_SANITIZE_STRING);



$message =filter_input(INPUT_POST,'message',FILTER_SANITIZE_STRING);





if($_SERVER['REQUEST_METHOD']== 'POST') {
	
	//0 is considered empty
	//empty:0,false,null,'',array(),'0'
	
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors['email']=true;
	}
	
	if(empty($Username)) {
		$errors['User name']=true;
	}
	if(mb_strlen($Username)<0 ||mb_strlen($Username)>25){
		$errors['User name']=true;
	}
	
	
	
	
	if(!array_key_exists($information,$possible_information)){
		$errors['information']=true;
	}
	
	
	
	
	
	if(mb_strlen($message)<5 ||mb_strlen($message)>100){
		$errors['message']=true;
	}
	
	
	
	
	//this is the way to represent info in checkbox to display an error messages
	if(!isset($_POST['terms'])){
		$errors['terms']=true;
	}
	
	
	
	
	
	
	
	
	
	
	
	if (empty($errors)){
		$headers ='From:=' .$name. '<' .$email. '>';
		mail('sidh0050@algonquincollege.com',$possible_subjects[$subject],$message,$headers);
	}
}