<html>
	<head>
		<title>Contribute!</title>
	</head>
	<body><table height="250px"><tr><td></td></tr></table>
	<table align="center" frame="box"> <tr><td>
		<?php
			$pin = $_POST['pc'];
			$area = $_POST['ar'];

			$conn = new mysqli("localhost", "root", "","Postal");
			if ($conn->connect_error) {
    				die("Connection failed: " . $conn->connect_error);
			}
			echo "Connected successfully to portal base..";
			mysql_select_db('postal');
			$sql = "INSERT INTO postal (contributor, pincode, area)VALUES ('Sriram', $pin, '$area')";
			if ($conn->query($sql) === TRUE) {
			    echo "Thanks for your contribution!";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			//mysql_close($conn);
		?>
		</td></tr></table>
	</body>
</html>
