<!DOCTYPE html>

	<?php
		function show($b){
			switch ($b) {
				case 'English':
					echo "Hello";						
					break;
				case 'Hindi':
					echo "नमस्ते";
					break;
				case 'उदू':
					echo "ہیلو";
					break;
				case 'ગુજરાતી':
					echo "હેલો";
					break;
				case 'मराठी':
					echo "हॅलो";
					break;
				case 'বাংলা':
					echo "হ্যালো";
					break;
				case 'ਪੰਜਾਬੀ':
					echo "ਸਤ ਸ੍ਰੀ ਅਕਾਲ";
					break;
				
				default:
					echo "Select Valid Language";
					break;
			}
		}
	?>
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
	$a=$_GET['dropdown'];
	 echo show($a);

	?>
</div>
</body>
</html>