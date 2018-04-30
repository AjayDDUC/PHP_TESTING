<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="icon" type="text/css" href="images.jpg">

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
<body bgcolor="lightblack" >
<h1 id="h" align="center">Form_View</h1>
<form>
	<table align="center" cellspacing="25px" bgcolor="lightblue">
		<tr>
			<td >Name</td>
			<td>
				<?php 
				echo $_GET['name'];
				?>
			</td>
			<td >Last</td>
			<td>
				<?php 
				echo $_GET['last'];
				?>
			</td>
		</tr>
		<tr>
			<td >Gender:</td>
			<td >
				<?php 
				echo $_GET['gender'];
				?>
			</td>
			<td >Marks</td>
			<td >
				<?php 
				echo $_GET['marks'];
				?>
			</td>
		</tr>

		<tr>
			<td >Roll</td>
			<td>
				<?php 
				echo $_GET['roll'];
				?>
			</td>
			<td >Mob.:</td>
			<td>
				<?php 
				echo $_GET['mob'];
				?>
			</td>
		</tr>

		<tr>
			<td >Course:</td>
			<td>
				<?php 
				echo $_GET['course'];
				?>
			</td>
			<td >Collage:</td>
			<td>
				<?php 
				echo $_GET['collage'];
				?>
			</td>			
		</tr>

		<tr>
			<td>Address:</td>
			<td>
				<?php 
				echo $_GET['address'];
				?>
			</td>
		</tr>
	</table>
</form>
</body>
</html>