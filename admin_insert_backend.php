<?php
$bookIDError = $bookNameError = $categoryError = $quantityError = $priceError = $errorText = "";
$bookID = $bookName = $category = $quantity = $price = "";
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
	if (empty($_POST["book_id"])) {
		$bookIDError = "Book ID is required";
	} else {
		$bookID = cleanInput($_POST["book_id"]);
	}

	if (empty($_POST["book_name"])) {
		$bookNameError = "Book name is required";
	} else {
		$bookName = cleanInput($_POST["book_name"]);
	}

	if (empty($_POST["category"])) {
		$categoryError = "Category is required";
	} else {
		$category = cleanInput($_POST["category"]);
	}
	if (empty($_POST["quantity"])) {
		$quantityError = "Quantity is required";
	} else {
		$quantity = cleanInput($_POST["quantity"]);
	}
	if (empty($_POST["price"])) {
		$priceError = "Price is required";
	} else {
		$price = cleanInput($_POST["price"]);
	}
	if( ( strlen($bookIDError) == 0 && strlen($bookNameError) == 0 && strlen($categoryError) == 0 &&
	   	strlen($quantityError) == 0 && strlen($priceError) == 0 ) ) {
		// Ready to insert book info
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()) {
			die('Connect Error ('. mysqli_connect_errno() .') '
				. mysqli_connect_error());
		}
		else {
			$sql = "INSERT INTO book (book_id, name, category, quantity, price) values ('$bookID','$bookName','$category','$quantity','$price')";
			if ($conn->query($sql)){
				echo "New record is inserted sucessfully";
				$conn->close();
				header("Location: admin_insert.php");
			}
			else {
				echo "Error: ". $sql ." ". $conn->error;
			}
			$conn->close();
		}
	}
}
?>
