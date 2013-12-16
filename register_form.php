
		<form action="index.php?content=register" method="post">
		<table class = 'simple'>
			<tr>
				<td>Voornaam:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name = "firstname"/>
				</td>
			</tr>
			
			<tr>
				<td>Tussenvoegsel:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name = "infix" />
				</td>
			</tr>
			
			<tr>
				<td>Achternaam:</td>
			</tr>
			<tr>
				<td>
					<input type="text" name = "surname" />
				</td>
			<tr>
			
			<tr>
				<td>Woonplaats</td>
			</tr>
			
			<tr>
				<td>
					<input type="text" name = "residence" />
				</td>
			</tr>
			
			    <td>Straat</td>
			</td>
			
				<tr>
				    <td>
				        <input type="text" name="street" />
					</td>
					
					<tr>
			    <td>Huisnummer</td>
			</td>
				<tr>
				    <td>
				        <input type="text" name="housenumber" />
					</td>
            </tr>				
			
					<tr>
			    <td>Postcode</td>
			</td>
				<tr>
				    <td>
				        <input type="text" name="zipcode" />
					</td>
            </tr>	
			
			<tr>
				<td>Geboortedatum</td>
			</tr>
			<tr>
				<td>
					<input type="date" min="1973" max="2013" name="date_of_birth"/></td>
				</td>
			</tr>
			
			<tr>
				<td>Geslacht</td>
			</tr>
			<tr>
				<td>
					<input type="radio" name = "sex"  value="male">man<br>
					<input type="radio" name = "sex"  value="female">vrouw
				</td>
			</tr>
			<tr>
				<td>Email</td>
			</tr>
			<tr>
				<td>
					<input type="email" name = "email" />
				</td>
			</tr>
			
		
		
				<td><input type = "submit" name = "submit" value = "verstuur" /></td>
			</tr>
			</table>
			</form>
	