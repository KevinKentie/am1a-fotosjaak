<?php
	//check of beide velden zijn ingevoerd
	if ( !empty($_POST['email']) && !empty($_POST['password']))
	{
		include ('./connect_db.php');
		$query = "SELECT * FROM `users` WHERE `email` = '".$_POST['email']."'
		AND `password` = '".$_POST['password']."'";
		
		//echo $query;
		//Vuur de query af op de database
		$result = mysql_query($query, $db);
		if (mysql_num_rows($result) > 0)
		{
			//verwijs door naar de homepage van degeregisteerde gebruiker
			//echo "Record bestaat in de database";
			$record = mysql_fetch_array($result);
			$_SESSION['id'] = $record['id'];
			$_SESSION['userrole'] = $record['userrole'];
			
			switch($record['userrole'])
			{
				case 'root':
					header("location:index.php?content=root_homepage");
				break;
				case 'admin':
					header("location:index.php?content=admin_homepage");
				break;
				case'customer':
					header("location:index.php?content=downloadpage");
				break;
			}
		}
		else
		{
			//Blijkbaar is het record niet gevonden in de database
			echo "Het e-mail adres en/of wachtwoord is niet bekend. U word doorgestuurd naar de inlog pagina";
			header ("refresh:4; url=index.php?content=login_form");
		}
	}
	else
	{
		echo 'U heeft beide of een van de velden niet ingevult. U wordt doorgestuurd naar de inlogpagina';
		header("refresh:4;url=index.php?content=login_form");
	}
?>