<?php
	$userrole = array('root', 'admin');
	include("security.php");
?>
<h3>Administrater homepage</h3>
Uw id is: <?php echo $_SESSION['id']; ?><br>
Uw gebruikersrol is: <?php echo $_SESSION['userrole']; ?>