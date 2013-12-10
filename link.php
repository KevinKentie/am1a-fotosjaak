<ul>
	<li>
		<a href="index.php?content=homepage">home</a>
	</li>
	<li>
		<a href="index.php?content=loginTest">logintest</a>
	</li>
	
	<?php if ( isset ($_SESSION['userrole']))
	{
		echo "<li>
			  <a href='index.php?content=loguit'>uitloggen</a>
	 		  </li>";
		switch ($_SESSION['userrole'])
			{
				case 'customer':
					echo"<li>
							<a href='index.php?content=downloadpage'> downloads</a>
						</li>";
						
						echo"<li>
							<a href='index.php?content=customer_homepage'> user home</a>
						</li>";
						echo"<li>
							<a href ='index.php?content=faq'> faq</a>
							</li>";
				break;
				case 'admin':
				
				break;
				case 'root':
				
				break;
			}
	}
	else
	{
		echo "<li>
			  <a href='index.php?content=login_form'>inloggen</a>
			  </li>
			  <li>
			  <a href='index.php?content=register_form'>registratie<a/>
			  </li>
			  ";
	}
	
	
	?>
	<li>
			  <a href='index.php?content=contact'>Contact<a/>
	</li>
	<li>
	<a href='index.php?content=hallo'>hallo<a/>
	</li>
</ul>