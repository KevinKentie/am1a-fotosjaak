<?php
require_once "class/LoginClass.php";
	//check of beide velden zijn ingevoerd
	if ( !empty($_POST['email']) && !empty($_POST['password']))
	{
		
		
		
		if (LoginClass::check_if_email_password_exist($_POST['email'],
													  $_POST['password']))
		{
			//verwijs door naar de homepage van degeregisteerde gebruiker
			//echo "De combinatie bestaat";exit();
			
			
			$user_object = LoginClass::find_user_by_email_password($_POST['email'],
																   $_POST['password']);
				
			
			$_SESSION['id'] = $user_object->get_id();;
			$_SESSION['userrole'] = $user_object->get_userrole();
			
			switch($_SESSION['userrole'])
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