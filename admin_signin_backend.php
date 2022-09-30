<?php
$idError = $passwordError = $errorText = "";
$id = $password= "";
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bookstore";
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["id"])) {
		$idError = "ID is required";
	} else {
		$id = test_input($_POST["id"]);
	}

	if (empty($_POST["password"])) {
		$passwordError = "Password is required";
	} else {
		$password = test_input($_POST["password"]);
	}
	if( strlen($idError) == 0 && strlen($passwordError) == 0 ) {
		// Ready to login
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()){
			$errorText=('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
		}
		else {
			$sql = "select admin_id, password from admin_user where(admin_id='$id'and password='$password')";
			$result=$conn->query($sql);
			if ($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					$uid=$row["admin_id"];
					$upassword=$row["password"];
					echo "<br>Username: ".$row["id"]."<br>Password: ".$row["password"]."<br>";
				}
				$conn->close();
				header("Location: admin_insert.php");
			}
			else{
				$conn->close();
				$errorText= "Wrong Username or Password!";
			}
		}
	}
}
?>
