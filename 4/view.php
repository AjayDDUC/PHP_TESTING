<!DOCTYPE html>
<html>
<head>
	<title>BIG Integers</title>
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
			margin: 200px;
			text-align: center;
		}
	</style>
</head>
<body>
<h1 id="h" align="center">Largest Number</h1>
<div id="view">
	<label><b>Largest Digit:</b></label>
<button id="btn">
	<?php
		$a=$_GET['first'];
		$b=$_GET['second'];
		$c=$_GET['third'];
		if($a==$b and $b==$c )
			echo $a;
		else if($a>$b)
		{
			if($a>$c)
			 echo $a;
			else
			echo $c; 
		}
		else 
		 echo $b;
		
	?>
</button>
</div>
</body>
</html>