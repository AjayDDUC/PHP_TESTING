<!DOCTYPE html>

	<?php
		function sum($b){
			$sum=0;
			for ($i=1; $i<=$b; $i++) {
				$sum=$sum+2*$i+1; 
				echo 2*$i+1;
				if($i!=$b)
					echo "+";
			}
			echo "=";
			echo "$sum";
		}
	?>
<html>
<head>
	<title>Result</title>
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
			margin: 70px;
			text-align: center;
		}
	</style>
</head>
<body>
<h1 id="h" align="center">Result</h1>
<div id="view">
	<label><b>Sum Of N Odd Numbers:</b></label><br>
<button id="btn">
	<?php
	$a=$_GET['first'];
	 echo sum($a);

	?>
</button>
</div>
</body>
</html>