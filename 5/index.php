<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
		<style type="text/css">
		#h
		{
			background: black;
			height: 50px;
			padding: 15px;
			color: white;
			text-shadow:2px 4px 2px red; 
			border: 5px double red;
			border-radius: 50px;

		}
		#view
		{
			margin-top: 100px;
			text-align: center;
		}


	</style>
</head>
<body>
<h1 id="h" align="center">Factorial</h1>
<form action="view.php" method="get">
<div id="view">
<table align="center" border="1px">
		<tr>
			<label>Enter Digit For Factorial</label><br><input type="number" name="first"><br>
		</tr>
		<br>
		<tr>
			<td>
				<input type="submit" value="Fac..">
			</td>
		</tr>
	</table>
</div>
</form>

</body>
</html>