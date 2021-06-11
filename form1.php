<html>
	<head>
		<title></title>
		<style>
			input[type="text"],input[type="email"],input[type="password"],textarea,select
			{
				height:30px;
				width:250px;
			}
			input[type="submit"],input[type="reset"]
			{
				height:32px;
				width:120px;
				border-radius:20px;
				border:1px solid black;
				background:gray;
				color:#fff;
			}
		</style>
		
	</head>
	</body>
		<table align="center" height="450" width="400" border="0" cellspacing="0" >
		<form action="" method="post">
			<tr >
				<td>Name</td>
				<td>
					<input type="text" id="name" value="" placeholder="Fill the name" required maxlength="15">
				</td>
			</tr>
			<tr >
				<td>Email</td>
				<td>
					<input type="email" id="email">
				</td>
			</tr>
			<tr  v>
				<td>Password</td>
				<td>
					<input type="password" id="password">
				</td>
			</tr>
			<tr >
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" id="male">Male
					<input type="radio" name="gender" id="female">Female
				</td>
			</tr>
			<tr >
				<td>Hobbies</td>
				<td>
					<input type="checkbox" id="dancing">Dancing<br>
					<input type="checkbox" id="reading">Reading<br>
					<input type="checkbox" id="playing">Playing
				</td>
			</tr>
			<tr >
				<td>Address</td>
				<td>
					<textarea rows="5" cols="27" id="address"></textarea>
				</td>
			</tr>
			<tr >
				<td>NATIONALITY</td>
				<td>
					<select id="nationality">
						<option>Select</option>
						<option>Indian</option>
						<option>AUSTRALIA</option>
						<option>switzerland</option>
					</select>
				</td>
			</tr>
			<tr >
				<td>SIGNATURE</td>
				<td>
					<input type="file" id="signature">
				</td>
			</tr>
			<tr >
				<td colspan="2" align="center">
					<input type="SUBMIT" id="submit">
					<input type="reset" id="reset">
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>