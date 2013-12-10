<?php
	require_once("MySqlDatabaseClass.php");
	
	//Hieronder de classdefinitie van de loginClass
	class LoginClass
	{
		//fields
		private $id;
		private $email;
		private $password;
		private $userrole;
		private $activated;
		private $activationdate;
		
		//properties
		public function get_id()
		{
			return $this->id;
		}
		public function get_email()
		{
			return $this->email;
		}
		public function get_password()
		{
			return $this->password;
		}
		public function get_userrole()
		{
			return $this->userrole;
		}
		public function get_activated()
		{
			return $this->activated;
		}
		public function get_activationdate()
		{
			return $this->activationdate;
		}
		
		
		//constructor
		public function __construct()
		{
			
		}
		
		public static function find_by_sql($query)
		{
			//Met global maak je het database-object uit de MySqlDatabaseClass
			//bruikbaar binnen de find_sql method.
			global $database;
			//vuur de query af op de database
			$result = $database->fire_query($query);
			//Dit is het array waar alle LoginClassobjecten in worden gestopt
			//elk LoginClassobject bevat een gevonden record uit de database
			//Vind de query 3 records dan zitten er drie LoginClassobjecten in
			//het array $object_array
			$object_array = array();
			
			while($row = mysql_fetch_array($result))
			{
				//Maak iedere while ronde een LoginClassobject aan
				$object = new LoginClass();
				//Stop per record ieder veld in ieder databaseveld in het LoginClassobject veld
				$object->id 			= $row['id'];
				$object->email 			= $row['email'];
				$object->password 		= $row['password'];
				$object->userrole 		= $row['userrole'];
				$object->activated 		= $row['activated'];
				$object->activationdate = $row['activationdate'];
				//Stop het net gemaakte LoginClassobject in het $object_array
				$object_array[] = $object;
				
			}
			
			return $object_array;
		}

	public static function select_all_from_login()
	{
		$query = "SELECT * FROM `login`";
		$result = self::find_by_sql($query);
		return $result;
	}
	
	public static function email_exists($emailaddress)
	{
		global $database;
		$query = "SELECT * FROM `login` WHERE `email` = '".$emailaddress."'";
		$result = $database->fire_query($query);
		if (mysql_num_rows($result) > 0)
		{
			return "Het email adres bestaat al in de database";
		}
		else
		{
			return "Het email adres bestaat nog niet in de database";	
		}
		
		
	}
	
	public static function check_if_email_password_exist($email, $password)
		{
			global $database;
			$query = "SELECT * FROM `login`
					 WHERE `email` = '".$email."'
					 AND `password` = '".$password."'";
					 
			$result = $database->fire_query($query);
			if(mysql_num_rows($result) > 0)
			{
				return true;
			}
			else {
			{
				return false;		
			}
			}
			
		}
		
	public static function find_user_by_email_password($email,$password)
	{
		$query = "SELECT * FROM `login`
					 WHERE `email` = '".$email."'
					 AND `password` = '".$password."'";
		$loginClassObjectInArray = self::find_by_sql($query);
		$loginClassObject = array_shift($loginClassObjectInArray);
		return $loginClassObject;
	}
}
	
?>