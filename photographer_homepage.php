<?php
	$userrole = array('root','photographer');
	include("security.php");
?>
<h3> photographer homepage </h3>
Uw id is: <?php echo $_SESSION['id']; ?><br>
Uw gebruikersrol is: <?php echo $_SESSION['userrole']; ?>