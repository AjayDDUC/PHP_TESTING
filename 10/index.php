<!DOCTYPE html>
<html>
<head>
	<title>Even_Number</title>
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
			font-size: 50px;
		}

	</style>
</head>
<body>
<h1 id="h" align="center">N_Even_Number</h1>
<form action="view.php" method="get" style="text-align: center;">
	<br><br><label>Enter The Value Of N </label>
<input type="number" name="digit">
<input type="submit" >
</form>
</body>
</html>  