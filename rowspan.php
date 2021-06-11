<html>
	<head>
		<title>Rowspan - Colspan</title>
	</head>
	<body>
		<h1>Colspan</h1>
		<table height="250" width="250" border="1" cellspacing="0">
			<tr align="center">
				<td colspan="3">1</td>
			</tr>
			<tr align="center"> <!-- Simple data neither (colspan) nor (rowspan) --> 
				<td>2</td>
				<td>3</td>
				<td>4</td>
			</tr>			    <!-- Simple data close -->
			<tr align="center">
				<td colspan="3">5</td>
			</tr>
		</table>
		
		<h1>Rowspan</h1>
		<table height="250" width="250" border="1" cellspacing="0">
			<tr align="center">
				<td rowspan="2">1</td>
				<td>2</td>
				<td>3</td>
			</tr>
			<tr align="center">
				<td>4</td>
				<td>5</td>
			</tr>
		</table>
	</body>
</html>