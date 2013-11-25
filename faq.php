<?php
	if (!isset($_GET['language']))
	{
		$_GET['language'] = 'dutch';
	}
	$userrole = array('customer');
	include("security.php");
	include("connect_db.php");
	$query = "SELECT* 
			FROM `faq`";
	$result = mysql_query($query, $db);
	//var_dump($record);
?>

<table class='simple'>
	<caption>
		Faq pagina
		<a href='index.php?content=faq&language=english'><img src='./images/engvlag.png' alt='' width='100' /></a>
		<a href='index.php?content=faq&language=dutch'><img src='./images/nlvlag.png' alt='' width='100' /></a>
	</caption>
	<tr>
		<th>
			id
		</th>
		<th>
			vraag
		</th>
		<th>
			antwoord
		</th>
	</tr>
<?php 
	while ( $record = mysql_fetch_array($result))
{
	echo "<tr>
			<td>
				".$record['id']."
			</td>
			<td>
				";
			if ($_GET['language'] == 'english')
			{
				echo $record['question_english'];
			}
			else
			{
				echo $record['question_dutch'];
			}
			echo "
			</td>
			<td>
				";
			if ($_GET['language'] == 'english')
			{
				echo $record['awnser_english'];				
			}
			else
			{
				echo $record['awnser_dutch'];
			}
			echo "
			</td>	
		  </tr>";
}
?>
</table>