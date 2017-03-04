<?php  
	$conn=mysql_connect("localhost","root","yyh");
	// $conn=mysql_connect("hdm182127434.my3w.com","hdm182127434","root3862749");
	if(!$conn){
		die('Could not connect: ' . mysql_error());
	}else{
	  mysql_select_db("wordpress",$conn);
	  mysql_query("set names utf8");
   }

?>