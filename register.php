<?php
	require_once ("class/LoginClass.php");
	
	if (LoginClass::check_if_email_exists($_POST['email']))
	{
		
		//Email bestaat alterugsturen naar de registratiepagina.
		echo "Het ingevulde emailadres bestaat al,<br>
			  gebruik een ander emailadres. U word doorgestuurd<br>
			  naar het registratieformulier";
		header("refresh:5;url=index.php?content=register_form");
	}
	else
	{
		LoginClass::insert_into_loginClass($_POST);
		//Schijf weg naar de database
		echo "U bent succesvol geregistreerd. U ontvangt een activatiemail<br>
		in uw mailbox van het opgegeven emailadres. Na het activeren van<br>
		uw account kunt u inloggen met een zelfgekozen wachtwoord";	
		header("refresh:5;url=index.php?content=login_form");	
	}
	
	//Hier wordt contact gemaakt met mysql-server.
	//$db = mysql_connect("localhost", "root",  "");
	
	
	//hier wordt er een database gekozen op een mysql-server.
	//mysql_select_db("users", $db);
	
	
	//$sql = "INSERT INTO `users` (  `id`,
	                               //`firstname`,
								  // `infix`,
								   //`surname`,
								   //`residence`,
								   //`street`,
								   //`housenumber`,
								   //`zipcode`,
								   //`date_of_birth`,
								  // `sex`,
								  // `marital_status`,
								   //`genre_favorite_game`,
								  // `favoritegame`,
								  // `email`,
								  // `password`,
								  // `userrole`)
					  //VALUES      ( NULL,
					               //'".$_POST['firstname']."',
								  // '".$_POST['infix']."',
								  // '".$_POST['surname']."',
								  // '".$_POST['residence']."',
								  // '".$_POST['street']."',
								  // '".$_POST['housenumber']."',
								  // '".$_POST['zipcode']."',
								  // '".$_POST['date_of_birth']."',
								  // '".$_POST['sex']."',
								  // '".$_POST['marital_status']."',
								  // '".$_POST['genre_favorite_game']."',
								  // '".$_POST['favoritegame']."',
								  // '".$_POST['email']."',
								  // '".$_POST['password']."',
								  // 'customer')";
								   
			 
//Hier wordt de sql-query op de database afgevuurt en uitgevoerd.
//mysql_query($sql, $db) or die(mysql_error()); 

//echo "De gegevens zijn succesvol geregistreerd. U wordt doorgestuurt naar de registratiepagina";
//header("refresh:4; url = index.php");								 
								   
?>
