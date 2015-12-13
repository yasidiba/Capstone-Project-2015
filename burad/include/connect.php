<?php

	$host="Localhost";
	$db_user="root";
	$db_pass="";
	$db="chintu";

mysql_connect($host,$db_user,$db_pass) or die ("Database not Connect");
mysql_select_db($db) or die("No Database available");
?>
