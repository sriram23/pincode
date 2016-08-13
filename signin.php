<html>
	<head>
		<title>Welcome!</title>
	</head>
	<body>
	<?php
		$username = $_GET['un'];
		$password = $_GET['pw'];
		if($username == "Sriram" && $password == "kite@123"){
			echo "<table align=center> <tr> <td>Hello! ".$username." Welcome !";
			echo "<form action=contribute.php method=POST><br>
				<input type=submit value=Go!></form>";
		}		
		else
			echo "<table align=center> <tr> <td>Sorry! Invalid Login.";
			
		
	?>
	</body>
</html>

