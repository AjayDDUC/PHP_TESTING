<!DOCTYPE html>
<?php
	function fib($b)
	{
		if($b==1 || $b==2)
			return 1;
		else
			return fib($b-1)+fib($b-2); 
	}
?>

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
			margin: 200px;
			text-align: center;
		}
	</style>
</head>
<body>
<h1 id="h" align="center">Result</h1>
<div id="view">
	<label><b>Fibonacci_Series</b></label>
<button id="btn">
	<?php
	 $a=$_GET['first'];
	 for ($i=1; $i <=$a ; $i++) { 
	 	echo Fib($i)."  " ;
	 }
	?>
</button>
</div>
</body>
</html>