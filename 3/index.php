<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
	table
	{
		background: -webkit-linear-gradient(90deg,red,yellow,green);
	}
	
	</style> 
</head>
<body bgcolor="lightblack" >
<h1 id="h" align="center">Registration Form</h1>
<form action="view.php" method="get" onsubmit="return confirm('Do You Want To Submit');" >
	<table align="center" cellspacing="25px" bgcolor="lightblue">
		<tr>
			<td >Name</td>
			<td><input type="text" name="name" placeholder="First Name"></td>
			<td >Last</td>
			<td><input type="text" name="last" placeholder="Last Name"></td>
		</tr>
		<tr>
			<td >Gender:</td>
			<td "><input type="radio" name="gender" checked="true" checked="true" value="Male">Male <input type="radio" name="gender" value="Female">Female</td>
			<td >Marks</td><td ><input type="number" name="marks" placeholder="Pin Number"></td>
		</tr>

		<tr>
			<td >Roll</td>
			<td><input type="text" name="roll" placeholder="Roll"  ></td>
			<td >Mob.:</td>
			<td><input type="text" name="mob" placeholder="Moblie Number"   maxlength="10"></td>
		</tr>

		<tr>
			<td >Course:</td>
			<td>
				<select style="width:93%;" name="course"  >
					<option >Select</option>
					<option>B.Sc.(H) Math</option>
					<option>B.Sc.(H) Physics</option>
					<option>B.Sc.(H) Chemistry</option>
					<option>B.Sc.(H)Computer Science</option>
					<option>B.Sc.Physical Science</option>
					<option>Other</option>
				</select>
			</td>
			<td >Collage:</td>
			<td>
				<select style="width: 100%;" name="collage"  >
				<option>Select</option>
					<option>DDUC</option>
					<option>NSIT</option>
					<option>DDC</option>
					<option>DTU</option>
					<option>IP</option>
					<option>Other</option>
				</select>
			</td>			
		</tr>

		<tr>
			<td>Address:</td>
			<td><textarea name="address" placeholder="Address" style="width: 90%; "></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" onclick="display()" ><input type="reset" name=""></td>
		</tr>
	</table>
</form>
</body>
</html>