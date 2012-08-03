<?php
/**

*This file is used to fetch data from phpmyadmin for my web-app by using authority eg username and password.
*Add button is used to add a new recipe in the database
*Copyright 2012-2013 sattisidhu
*@licence APACHE https://github.com/sidh0050/web-app
*@package web-app
*@version 1.0.0
*/

$user=getenv('DB_USER');
$pass=getenv('DB_PASS'); 
$data_source=stripslashes(getenv('DATA_SOURCE'));


$db=new PDO($data_source,$user,$pass);


$db->exec('SET NAMES utf8');
