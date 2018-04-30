<!DOCTYPE html>
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
			font-size: 50px;
		}
	</style>
</head>
<body>
<h1 id="h" align="center">Result</h1>
<div id="view">
	<?php
		if(isset($_POST['login']))
		{
		$user=$_POST['user'];
		$pass=$_POST['pass'];
			$con=mysqli_connect('localhost','root','','login');
			if(!$con)
			{
				echo "Connection Error:".mysqli_connect_error();
			}
			else
			{
				$q="select * from user";
				$result=mysqli_query($con,$q);
				$num=mysqli_num_rows($result);
				$row=mysqli_fetch_array($result);
				$username=$row['username'];
			if(!strcmp($username,$user))
				echo "Welcome";
			else
				echo "Invalid User";

			}
		}
	?>

</div>
</body>
</html>
