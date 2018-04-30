<!DOCTYPE html>
<?php
	function prime($a)
	{
		$flag=0;
		for($i=2;$i<($a/2);$i++)
		{
			if($a%$i==0)
				$flag++;
		}
		return flag;
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
	<label><b>Prime(Y/N)</b></label>
<button id="btn">
	<?php
	 $a=$_GET['first'];
	 $b=function prime($a);
	  if($b==0)
	  	echo "$a is a prime number";
	  else
	  	echo "$a not a prime number";
	?>
</button>
</div>
</body>
</html>