<!DOCTYPE html>
<html>
<head>
	<title>Sort</title>
	<script type="text/javascript">
		function create()
		{
			var v=document.getElementById('put').value;
			for(var i=0;i<v;i++)
			{
					<?php echo "HI" ?>
			}
		}
	</script>
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


	</style>
</head>
<body>
<h1 id="h" align="center">Array_Sorting</h1>
<label>How Many Digit You Enter</label>
<input type="number" id="put" name="digit">
<button onclick="create()">Create</button>
</body>
</html>  