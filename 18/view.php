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
		#btn
		{
			width: 50;
			height: 25;
		}

		#view
		{
			margin: 100px;
			text-align: center;
		}
		 label
		 {
		 	font-size: 28px;
		 }
	</style>
</head>
<body>
<h1 id="h" align="center">Result</h1>
<div id="view">
	<label><b>Reverse String</b></label>
<p>
	<?php
	 $a=$_GET['string'];
		echo "<b>".str_replace(" ","",$a)."<b>";	
	?>
</p>
</div>
</body>
</html>