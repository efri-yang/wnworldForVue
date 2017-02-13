<?php  
	$conn=mysql_connect("localhost","root","yyh");
	if(!$conn){
		die('Could not connect: ' . mysql_error());
	}else{
	  mysql_select_db("wordpres",$conn);
	  mysql_query("set names utf8");
   }

?>