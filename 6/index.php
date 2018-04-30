<!DOCTYPE html>
<html>
<head>
	<title>Pattern</title>
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
			font-size: 50px;
		}


	</style>
</head>
<body>
<h1 id="h" align="center">Pattern_Generator</h1>
<div id="view">
	<form action="view.php" method="get">
		<tr>
		<label>Enter The Order</label>
		<input type="number" name="num">			
		</tr>

		<tr>
			<input type="submit" value="Genertor">
		</tr>
	</form>
</div>
</body>
</html>  