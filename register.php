<?php
	//var_dump($_POST);
	
	//Hier wordt contact gemaakt met mysql-server.
	$db = mysql_connect("localhost", "root",  "");
	
	
	//hier wordt er een database gekozen op een mysql-server.
	mysql_select_db("users", $db);
	
	
	$sql = "INSERT INTO `users` (  `id`,
	                               `firstname`,
								   `infix`,
								   `surname`,
								   `residence`,
								   `street`,
								   `housenumber`,
								   `zipcode`,
								   `date_of_birth`,
								   `sex`,
								   `marital_status`,
								   `genre_favorite_game`,
								   `favoritegame`,
								   `email`,
								   `password`,
								   `userrole`)
					  VALUES      ( NULL,
					               '".$_POST['firstname']."',
								   '".$_POST['infix']."',
								   '".$_POST['surname']."',
								   '".$_POST['residence']."',
								   '".$_POST['street']."',
								   '".$_POST['housenumber']."',
								   '".$_POST['zipcode']."',
								   '".$_POST['date_of_birth']."',
								   '".$_POST['sex']."',
								   '".$_POST['marital_status']."',
								   '".$_POST['genre_favorite_game']."',
								   '".$_POST['favoritegame']."',
								   '".$_POST['email']."',
								   '".$_POST['password']."',
								   'customer')";
								   
			 
//Hier wordt de sql-query op de database afgevuurt en uitgevoerd.
mysql_query($sql, $db) or die(mysql_error()); 

echo "De gegevens zijn succesvol geregistreerd. U wordt doorgestuurt naar de registratiepagina";
header("refresh:4; url = index.php");								 
								   
?>
