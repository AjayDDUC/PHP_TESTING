<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
		#view
		{
			margin-top: 100px;
			text-align: center;

		}
		label
		{
			font-size: 28px;
		}
	</style>
</head>
<body>
<h1 id="h" align="center">Login</h1>
<div id="view">
	<form action="view.php" method="post">
		<div>
			<legend>UserID</legend>
			<input type="mail" name="user" placeholder="John@gmail.com">
			<legend>Password</legend>
			<input type="password" name="pass">
		</div>
		<div>
			<input type="submit" name="login" value="Login">
			<input type="reset" name="" value="Clear">

		</div>
	</form>
</div>
</body>
</html>


