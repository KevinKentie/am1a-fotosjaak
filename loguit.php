<?php

	/*
	 * Als je een method wilt gebruiken uit de sessionclass, dan moet je
	 * het bestand waar de classdefenitie in staat toevoegen
	 * aan dit bestand.Gebruik daarvoor require_once
	 */
	
	require_once ("class/SessionClass.php");
	
	/*
	 * we roepen de method loguit() aan in de sessionclass
	 */
	 $session->loguit();
	
	//we gaan de persoon die uitlogt doorsturen naar de homepage.php
	header("location:index.php?content=homepage");
?>