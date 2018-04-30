<!DOCTYPE html>

	<?php
	$r=0;
		function fac($b){
			if($b==0)
				return 1;
			else
			{
				return $b*fac($b-1);
			}
			
			}
	?>
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
<h1 id="h" align="center">Result</h1>
<div id="view">
	<label><b>Factorial:</b></label>
<button id="btn">
	<?php
	$a=$_GET['first'];
	 echo fac($a);

	?>
</button>
</div>
</body>
</html>