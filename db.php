<?php
	$hostname= "";
	$username = "";
	$passwd = "";
	$dbname = "";
	
	try{
		mysql_connect($hostname,$username,$passwd);
		mysql_select_db($dbname);
	}
	catch(Exception $e){
		echo $e.getMessage();	
	}
?>