<?php
	class SessionClass
	{
		//fields
		private $id;
		private $email;
		private $userrole;
		private $logged_in;
		
		//Constructor van een php-class heeft altijd dezelfde naam:
		//__construct(). Let op dubble underscore. Onthoud dat iedere
		//php-method altijd het woord function gebruikt
		
		public function __construct()
		{
			
		}
		
		/*Maak een method die het id, email, userrole en logged_in opslaat
		 * in session variabelen
		 * 
		 */
		 
		 public function login($userObject)
		 {
		 	$this->id = $_SESSION['id'] = $userObject-> get_id();
			$this->email = $SESSION['email'] = $userObject->get_email();
			$this->userrole = $SESSION['userrole'] = $userObject->get_userrole();
			$logged_in-> true;
		 }
		 
		 public function loguit()
		 {
		 	
			/* de functie session_destroy vernietigt alle sesion variabelen zoals
			 * $_SESSION['id'],$_SESSION['email'], enz...
			 */
		 	session_destroy();
			
			/*Alle fields moeten ook leg worden gehaald met de php-functie
			 * unset
			 */
			unset($this->id);
			unset($this->email);
			unset($this->userrole);
			//Het field $logged_in moet dan op false worden gezet.
			$this->logged_in = false;
		 }
		
	}
	
	$session = new SessionClass();
?>