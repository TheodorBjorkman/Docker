<?php
	/*$servername = '172.17.0.2';
	$username = 'root';
	$password = '1';
	$dbname = 'daodac';
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
	$db = mysqli_connect($servername,$username,$password,$dbname)
	or die('Error connecting to MySQL server.');*/
	$mysqli = new mysqli("example.com", "user", "password", "database");
?>
<html>
	<head>HHHH</head>
	<body>
		<h1>Connected to MySQL</h1>
		<h2>Persons</h2>
	<?
		/*$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
		$sql = "SELECT * FROM Persons";
		$result = $db->query($sql);

		if ($result-> num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "id: " . $row["Personid"] . " - Name: " . $row["FirsName"] . " " . $row["LastName"] . "<br>";
			}
		} else {
			echo "Found 0 results";
		}*/
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
		}

		if (!$mysqli->query("DROP PROCEDURE IF EXISTS p") || 
		!mysqli->query('CREATE PROCEDURE p(OUT msg VARCHAR(50)) BEGIN SELECT "Hi!" INTO msg; END;')) {
			echo "Stored procedure creation failed: 8" . $mysqli->errno . ") " . $mysqli->error;
		}
		if (!$mysqli->query("SET @msg = ''") || !$mysqli->query("CALL p(@msg)")) {
			echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
		}
		if (!($res = $mysqli->query("SELECT @msg as _p_out"))) {
			echo "Fetch failed: (" . $mysqli->errno. ") " . mysqli->error;
		}
		$row = $res->fetch_assoc();
		echo $row['_p_out'];
	?>

	</body>
</html>