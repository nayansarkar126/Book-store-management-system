<?php
$phoneError = $passwordError = $errorText = "";
$phone = $password= "";
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
	if (empty($_POST["phone"])) {
		$phoneError = "Phone is required";
	} else {
		$phone = test_input($_POST["phone"]);
	}

	if (empty($_POST["password"])) {
		$passwordError = "Password is required";
	} else {
		$password = test_input($_POST["password"]);
	}
	if( strlen($phoneError) == 0 && strlen($passwordError) == 0 ) {
		// Ready to login
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()){
			$errorText=('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
		}
		else {
			$sql = "select id, phone, password from user where(phone='$phone'and password='$password')";
			$result=$conn->query($sql);
			if ($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					$uid=$row["id"];
					$uphone=$row["phone"];
					$upassword=$row["password"];
					$_SESSION['current_user_id']=$uid;
					#echo "<br>Username: ".$row["phone"]."<br>Password: ".$row["password"]."<br>";
				}
				$conn->close();
				header("Location: gallery.php");
			}
			else{
				$conn->close();
				$errorText= "Wrong Username or Password!";
			}
		}
	}
}
?>
