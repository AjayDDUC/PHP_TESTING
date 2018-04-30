<!DOCTYPE html>
<html>
<head>
	<title>Color</title>
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
		  </style>
</head>
<body>
<h1 id="h" align="center">Color</h1>
<?php
	$color=array('white','green','red');
	for ($i=0; $i < 3; $i++) 
		echo "$color[$i],";
?>
<ul>
	<li><?php echo $color[1]?></li>
	<li><?php echo $color[2]?></li>
	<li><?php echo $color[0]?></li>
</ul>
</body>
</html>


