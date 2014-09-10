<?php
	
	$host = 'localhost';
	$user = 'root';
	$pass = 'toor';
	$tablo = 'uyelik';
	
	$baglan = mysql_connect($host,$user,$pass) or die(mysql_error());
	
	mysql_select_db($tablo,$baglan) or die(mysql_error());
	
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER SET 'utf8'");

?>
