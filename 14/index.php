<!DOCTYPE html>
<html>
<head>
	<title>E-Mail</title>
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
		<script type="text/javascript">
			
function validate() {

			var result=false;
			var e=document.getElementsByName('email_id')[0];
			document.write(l+"length");
			var atindex=e.indexOf('@');
			var dotindex=e.lastIndexOf('.');
			if(atindex<1 || dotindex>=l-2 || dotindex-atindex<3)
				result=false;
			return(result);	
			document.write("Invalid E-Mail");
		}
		</script>
</head>
<body>
<h1 id="h" align="center">E-Mail_Validation</h1>
<form method="get">
<div id="view">
			<th>E-Mail:</th>
			<input type="text" name="email_id" required="true">
			<input type="submit" onclick="validate()" value="Register">
</div>
</form>
</body>
</html>


