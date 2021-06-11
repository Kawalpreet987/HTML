<html>
	<head>
		<title>Forms</title>
	</head>
		<style>
			input[type="text"],input[type="email"],input[type="password"],input[type=date],input[type=number],input[type=color],required,select,textarea
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
				background: #e2e2e2;
				color:#000;
			}
		</style>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
			<table height="500" width="450" border="0" cellspacing="0" align="center" >
				<tr valign="top">
					<td>Name</td>
					<td>
						<input type="text" id="name" value="" placeholder="fill the name" required maxlength="15">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="email" id="email" value="" placeholder="fill the email" required maxlength="15">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" id="password" value="" placeholder="fill the password" required maxlength="15">
					</td>
				</tr>
				<tr>
					<td>Number</td>
					<td>
						<input type="number" id="number" value="" placeholder="fill your mobile no" required maxlength="13">
					</td>
				</tr>
				<tr>
					<td>Date of birth</td>
					<td>
						<input type="date" id="date" value="" required>
					</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" id="male">Male
						<input type="radio" name="gender" id="female">Female
					</td>
				</tr>
				<tr>
					<td>Color</td>
					<td>
						<input type="color" id="color" value="" required>
					</td>
				</tr>
				<tr>
					<td>Hobbies</td>
					<td>
						<input type="checkbox" id="dancing">Dancing<br>
						<input type="checkbox" id="singing">Singing<br>
						<input type="checkbox" id="cricket">Cricket
					</td>
				</tr>
				<tr>
					<td>Nationality</td>
					<td>
						<select id="nationality">
							<option>Select</option>
							<option>Indian</option>
							<option>Pakistan</option>
							<option>Afganistan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Address</td>
					<td>
						<textarea placeholder="address" required></textarea>
					</td>
				</tr>
				<tr>
					<td>Signature</td>
					<td>
						<input type="file" id="signature">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="submit">
						<input type="reset" value="reset">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
		