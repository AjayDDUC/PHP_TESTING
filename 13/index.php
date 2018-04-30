<!DOCTYPE html>
<html>
<head>
	<title>Multi_Hello</title>
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
		iframe
		{
			margin-top: 75px;
			width: 100%;
			height: 100%;
			border: 0px;
		}
	</style>
</head>
<body>
<h1 id="h" align="center">Multi_Language_Hello</h1>
<form action="view.php" method="get">
<div id="view">
	<form>
			<select name="dropdown">>
				<option><-----Select-----></option>
				<option>English</option>
				<option>ગુજરાતી</option>
				<option>Hindi</option>
				<option>मराठी</option>
				<option>বাংলা</option>
				<option>ਪੰਜਾਬੀ</option>
				<option>उदू</option>
			</select>
			<input type="submit" value="SHOW">
	</form>
</div>
</body>
</html>


