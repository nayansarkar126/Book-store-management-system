<?php
$bookIDError = $errorText = "";
$orderBookID='';
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bookstore";
$books = array();

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
    $errorText=('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
}
else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["order_book_id"])) {
            $errorText = "Book ID is required for booking";
        } else {
            $orderBookID = $_POST["order_book_id"];
            echo $orderBookID;
            $currentUserID=$_SESSION["current_user_id"];
            $currentUserID=$currentUserID==null?0:$currentUserID;
            $sql = "INSERT INTO book_order (book_id, user_id, order_quantity) values ('$orderBookID','$currentUserID','1')";
			if ($conn->query($sql)){
				// echo "New record is inserted sucessfully";
				$conn->close();
				header("Location: gallery.php");
			}
			else {
				echo "Error: ". $sql ." ". $conn->error;
                $conn->close();
			}
        }

    }
    $errorText='';
    $orderBookID='';
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
        $errorText=('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
    } else {
        $sql = "select book_id,name,category,quantity,price from book";
        $result=$conn->query($sql);
        if ($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $bID=$row["book_id"];
                $bName=$row["name"];
                $bCategory=$row["category"];
                $bQuantity=$row["quantity"];
                $bPrice=$row["price"];
                array_push($books,$row);
            }
            $conn->close();
        }
        else{
            $conn->close();
            $errorText= "There is no book exists!";
        }
    }
}
?>
