<?php
	if (!isset($_SESSION['id']))//De persoon is ingelogd
	{
		echo "Sorry, U moet eerst inloggen om op deze site te komen.";
		header("refresh:4;url=index.php?content=homepage");
		exit();
	}
	else if ( !in_array($_SESSION['userrole'], $userrole))
	{
		echo "Je bent wel ingelogd maar deze pagina is niet voor jou beschikbaar.
				Je gaat weer terug naar de homepage.";
				header("refresh:5; url=index.php?content=".$_SESSION['userrole']."_homepage");
		exit();
	}
?>