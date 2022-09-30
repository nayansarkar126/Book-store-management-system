<?php
$nameError = $phoneError = $passwordError = "";
$name = $phone = $password="";
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bookstore";
function cleanInput($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameError = "Name is required";
	} else {
		$name = cleanInput($_POST["name"]);
	}

	if (empty($_POST["phone"])) {
		$phoneError = "Phone is required";
	} else {
		$phone = cleanInput($_POST["phone"]);
	}

	if (empty($_POST["password"])) {
		$passwordError = "Password is required";
	} else {
		$password = cleanInput($_POST["password"]);
	}
	if( ( strlen($nameError) == 0 && strlen($phoneError) == 0 && strlen($passwordError) == 0 ) ) {
		// Ready to sign up
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()) {
			die('Connect Error ('. mysqli_connect_errno() .') '
				. mysqli_connect_error());
		}
		else {
			$sql = "INSERT INTO user (name, phone, password) values ('$name','$phone','$password')";
			if ($conn->query($sql)){
				echo "New record is inserted sucessfully";
				$conn->close();
				header("Location: signin.php");
			}
			else {
				echo "Error: ". $sql ." ". $conn->error;
			}
			$conn->close();
		}
	}
}
?>
