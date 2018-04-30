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
			font-size: 50px;
		}


	</style>
</head>
<body>
<h1 id="h" align="center">Pattern</h1>
<div id="view">
	<?php
	$a=$_GET['num'];
		for ($i=1; $i<=$a ; $i++) { 
			for ($j=1; $j<=$i; $j++) 
						echo "* ";			
				echo "<br>";
		 } 
	 ?>
</div>
</body>
</html>  