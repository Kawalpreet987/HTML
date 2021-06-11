<html>
	<head>
		<title></title>
	</head>
	<style>
		input[type="text"],input[type="guardian's name"],input[type="date"],input[type="number"],input[type="email"],input[type="password"],textarea,select,option
		{
			height:30px;
			width:250px;
			border:1px dashed black;
			padding-left:10px;
			outline:none;
		}
		input[type="submit"],input[type="reset"]
		{
			height:30px;
			width:100px;
			border-radius:15px;
			border:1px dashed black;
			background color: #e2e2e2;
			color: #000;
		}
	</style>
	<body>
		<form action="" method="post">
			<table height="600" width="600" border="0" cellspacing="0" align="center">
					<tr>	
						<td>Name</td>
						<td>
							<input type="text" id="name" required placeholder="enter your name" maxlength="20">
						</td>
					</tr>
					<tr>	
						<td>Guardian's Name</td>
						<td>
							<input type="text" id=" guardian'name" required placeholder="enter guardians's name" maxlength="20">
						</td>
					</tr>
					<tr>	
						<td>Date Of Birth</td>
						<td>
							<input type="date" id="date" required >
						</td>
					</tr>
					<tr>	
						<td>Gender</td>
						<td>
							<input type="radio" name="gender" id="name">Male
							<input type="radio" name="gender" id="name">Female
						</td>
					</tr>
					<tr>	
						<td>Mobile Number</td>
						<td>
							<input type="number" id="mobile number" required placeholder="enter your mobile no" maxlength="13">
						</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>	
							<textarea rows="5" required placeholder="enter your address"></textarea>
						</td>
					</tr>
					<tr>	
						<td>Zip Code</td>
						<td>
							<input type="number" id="zipcode" required placeholder="enter your pin code">
						</td>
					</tr>
					<tr>
						<td>Nationality</td>
						<td>
							<select id="nationality">
								<option>select</option>
								<option>India</option>
								<option>England</option>
								<option>Australia</option>
								<option>South Africa</option>
								<option>London</option>
							</select>
						</td>
					</tr>
					<tr>	
						<td>Email</td>
						<td>
							<input type="email" id="email" required placeholder="enter your email" maxlength="20">
						</td>
					</tr>
					<tr>	
						<td>password</td>
						<td>
							<input type="password" id="password" required placeholder="enter your password" maxlength="10">
						</td>
					</tr>
					<tr>	
						<td>Hobbies</td>
						<td>
							<input type="checkbox" id="dancing">Dancing<br>
							<input type="checkbox" id="singing">Singing<br>
							<input type="checkbox" id="reading">Reading<br>
							<input type="checkbox" id="playing">Playing
						</td>
					</tr>
					<tr>	
						<td>Signature</td>
						<td>
							<input type="file" id="signature" required>
						</td>
					</tr>
					<tr>	
						<td colspan="2" align="center">
							<input type="submit" id="submit">
							<input type="reset" id="reset">
						</td>
					</tr>
			</table>
		</form>
	</body>
</html>