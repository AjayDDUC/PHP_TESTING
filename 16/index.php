<!DOCTYPE html>
<html>
<head>
	<title>String</title>
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
		 label
		 {
		 	font-size: 28px;
		 }


	</style>
</head>
<body>
<h1 id="h" align="center">String</h1>
<form action="view.php" method="get">
<div id="view">
<table align="center" border="1px">
		<tr>
			<label>Enter String</label><br><input type="text" name="string">
		</tr>
		<br>
		<br>
		<tr>
			<td>
				<input type="submit">
			</td>
		</tr>
	</table>
</div>
</form>

</body>
</html>