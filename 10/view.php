<!DOCTYPE html>
<html>
<head>
	<title>View</title>
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
		#btn
		{
			width: 50;
			height: 25;
		}

		#view
		{
			margin: 50px;
			text-align: center; 
		}
		#btn
		{
			height: 25px;
		}
	</style>
</head>
<body>
<h1 id="h" align="center">Result</h1>
<div id="view">
	<button id="btn">
	<?php
	$x=$_GET['digit'];
	for($i=1;$i<=$x;$i++)
	{
		echo "  ".$i*2;	
	}
  ?>
</button>
</div>

</body>
</html>