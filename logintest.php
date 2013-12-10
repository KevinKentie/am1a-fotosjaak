<h3>Dit is de logintest pagina</h3><hr>
<?php 
	//Include de LoginClass
	require_once('class/LoginClass.php');
	
	$loginClassObj = new LoginClass();
	
	$query = "SELECT * FROM `login`";
	
	//we hebben de method find_my_sql($query) static gemaakt. dit heeft als voordeel dat we deze method kunnen aanroepen zonder eerst een opject te maken
	//van de clas LoginClass. We kunnen de method simple aanroepen door de classnaam gevolgd door een dubbele punt :: dus
	//LoginClass::find_by_sql($query)
	
	$result_array = LoginClass::select_all_from_login($query);
	
	echo "<table>";
	foreach ($result_array as $value)
	{
		echo"<tr>
		<td>".$value->get_id()."</td>
		<td>".$value->get_email()."</td>
		<td>".$value->get_password()."</td>
		<td>".$value->get_userrole()."</td>
		<td>".$value->get_activated()."</td>
		<td>".$value->get_activationdate()."</td>
		</tr>";
		
	}
	echo"</table>"
	
?>
Bestaat het e-mailadress developer@gmail.com?<br>
<?php echo LoginClass::email_exists("administrator@gmail.com"); ?>
