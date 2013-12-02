<?php
	require_once 'config/config.php';
	
	class MySqlDatabaseClass
	{
		//fields
		private $db_connection;
		
		//dit is de vonstructor van de MySqlDatabaseClass
		//een cunstructor herken je in PHP aan de naam. de naam is altijd 
		//__construct
		public function __construct()
		{
			//Velden roep je aan met $this->van_het_veld_zonder_$
			$this->db_connection = mysql_connect(SERVERNAME,
												 USERNAME,
												 PASSWORD);
												 
			//hier word een database geselecteerd
			mysql_select_db(DATABASE, $this->db_connection) or die('MySqlDatabaseClass, database niet geselecteerd');
		}
		
		//Deze functie vuurt als argument een query mee. 
		//deze wordt door de mysql_query($query) afgevuurt op de database
		public function fire_query($query)
		{
			$result = mysql_query($query) or die('MySqlDatabase: '.mysql_error());
			return $result;
		}
		
	}
	
	//Maak nu instantie van de net gedefinieerde class.
	$database = new MySqlDatabaseClass();
	
	
?>