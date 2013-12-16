<?php
require_once("class/LoginClass.php");
require_once("class/SessionClass.php");
	//check of beide velden zijn ingevoerd
	if ( !empty($_POST['email']) && !empty($_POST['password']))
	{
		
		
		
		if (LoginClass::check_if_email_password_exist($_POST['email'],
													  $_POST['password']))
		{
			//verwijs door naar de homepage van degeregisteerde gebruiker
			//echo "De combinatie bestaat";exit();
			
			/*Check nu dijdelijk is dat de combinatie van email en password
			 * bestaat of het account wel geactiveerd is.
			 */
			 if(LoginClass::check_if_account_is_activated($_POST['email'],
			 											  $_POST['password']))
														  {}
			
			
			
			
			/*Roep de static method find_user_by_email_password aan uit de LoginClass
			 * Deze method geeft precies 1 LoginClass-Object terug. Je kunt via dit object de properties
			 * opvragen zoals:get_id(), get_email(), get_password(), enz....
			 */
			$user_object = LoginClass::find_user_by_email_password($_POST['email'],
																   $_POST['password']);
				
			$session->login(find_user_by_email_password($_POST['email'],
														$_POST['password']));
			$_SESSION['id'] = $user_object->get_id();;
			$_SESSION['userrole'] = $user_object->get_userrole();
			
			switch($_SESSION['userrole'])
			{
				case 'root':
					header("location:index.php?content=root_homepage");
				break;
				case 'administator':
					header("location:index.php?content=admin_homepage");
				break;
				case'customer':
					header("location:index.php?content=downloadpage");
				break;
				case'developer':
					header("location:index.php?content=developer_homepage");
				break;
				case'photographer':
					header("location:index.php?content=photographer_homepage");
				break;
			}
			}
			else
			{
				echo"Uw accound is nog niet door u geactiveerd.Check uw<br>
				email voor de activatie";
				header("refresh:4; url=index.php?content=homepge");
			}
		}
		else
		{
			//Blijkbaar is het record niet gevonden in de database
			echo "Het e-mail adres en/of wachtwoord is niet bekend. U word doorgestuurd naar de inlog pagina";
			header ("refresh:4; url=index.php?content=login_form");
		
		
	
	
		echo 'U heeft beide of een van de velden niet ingevult. U wordt doorgestuurd naar de inlogpagina';
		header("refresh:4;url=index.php?content=login_form");
	}
?>