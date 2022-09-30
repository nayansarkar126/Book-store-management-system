<?php
$bookIDError = $errorText = "";
$bookID = $resultText = "";
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
		// Ready to login
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()){
			$errorText=('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
		}
		else {
			$sql = "select book_id,name,category,quantity,price from book where(book_id='$bookID')";
			$result=$conn->query($sql);
			if ($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					$bID=$row["book_id"];
					$bName=$row["name"];
					$bCategory=$row["category"];
					$bQuantity=$row["quantity"];
					$bPrice=$row["price"];
					$resultText = "<br>Book id: ".$bID."<br>Name: ".$bName."<br>Category: ".$bCategory."<br>Quantity: ".$bQuantity."<br>Price: ".$bPrice."<br>";
				}
				$conn->close();
			}
			else{
				$conn->close();
				$errorText= "There is no book exists!";
			}
		}
	}
}
?>
