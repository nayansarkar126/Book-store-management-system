<?php
$bookIDError = $errorText = "";
$bookID = "";
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
	if (empty($_POST["book_id"])) {
		$bookIDError = "Book ID is required";
	} else {
		$bookID = test_input($_POST["book_id"]);
	}
	if( strlen($bookIDError) == 0 ) {
		// Ready to delete
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()){
			$errorText=('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
		}
		else {
			$sql = "delete from book where(book_id='$bookID');";
			if ($conn->query($sql)===TRUE){
				$conn->close();
				header("Location: admin_insert.php");
			}
			else{
				$conn->close();
				$errorText= "Book ID is not found";
			}
		}
	}
}
?>
