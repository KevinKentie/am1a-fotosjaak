<?php
//Hier wordt contact gemaakt met mysql-server.
	$db = mysql_connect("localhost", "root",  "");
	
	
	//hier wordt er een database gekozen op een mysql-server.
	mysql_select_db("am1a-fotosjaak", $db);
?>