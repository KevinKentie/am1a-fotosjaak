<?php
require_once ("MySqlDatabaseClass.php");
class UserClass
{
	//fields
	private $id;
	private $firstname;
	private $infix;
	private $surname;
	private $address;
	private $addressnumber;
	private $city;
	private $zipcode;
	private $country;
	private $telephonenumber;
	private $mobilephonenumber;
	
	//propperties
	public function getId() 				{ return $this->id; }
	public function getFirstname()			{ return $this->firstname; }
	public function getInfix() 				{ return $this->infix; }
	public function getSurname() 			{ return $this->surname; }
	public function getAddress() 			{ return $this->address; }
	public function getAddressnumber() 		{ return $this->addressnumber; }
	public function getCity() 				{ return $this->city; }
	public function getZipcode() 			{ return $this->zipcode; }
	public function getCountry() 			{ return $this->country; }
	public function getTelephonenumber() 	{ return $this->telephonenumber; }
	public function getMobilephonenumber() 	{ return $this->mobilephonenumber; }
	
	//constructor
	public function __construct()
	{
		
	}
	
	public static function find_by_sql($query)
	{
		global $database;
		
		$result = $database->fire_query($query);
		
		$object_array = array();
		
		while ($row = mysql_fetch_array($result))
		{
			$object = new UserClass();
			
			$object->id 				= $row['id'];
			$object->firstname 			= $row['firstname'];
			$object->infix 				= $row['infix'];
			$object->surname 			= $row['surname'];
			$object->address			= $row['address'];
			$object->adressnumber		= $row['addressnumber'];
			$object->city 				= $row['city'];
			$object->zipcode 			= $row['zipcode'];
			$object->country 			= $row['country'];
			$object->telephonenumber 	= $row['telephonenumber'];
			$object->mobilephonenumber 	= $row['mobilephonenumber'];
			
			$object_array[] = $object;
		}
		return $object_array;
	}
	
}


?>