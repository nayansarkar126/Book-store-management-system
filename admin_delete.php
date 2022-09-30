<?php include "admin_delete_backend.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>www.bookstore.com</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="blueDiv">
		<center>Authority panel</center>
	</div>
	<div class="spacer20v"></div>
	<div class="blueDiv">
		<div class="navbar">
			<div class="navLeftItem">
				<div class="gridRowItem navLink">
					<a href="admin_insert.php">Insert</a>
				</div>
				<div class="gridRowItem navLink">
					<a href="admin_show.php">Show</a>
				</div>
				<div class="gridRowItem navLink">
					<a href="admin_update.php">Update</a>
				</div>
				<div class="gridRowItem navLink">
					<a href="admin_delete.php">Delete</a>
				</div>
			</div>
			<div class="navRightItem">
				<div class="gridRowItem navLink">
					<a href="index.html">Back</a>
				</div>
			</div>
		</div>
	</div>
	<div class="spacer20v"></div>
	<div id="about" class="blueDiv">
		<center class="colorBlack">Delete Information</center>
	</div>

	<div style="padding-top: 10px;"></div>

	<div style="padding-top: 10px;"></div>
	<div class="adminForm">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="gridColumnItem adminFormGap">
				<div class="gridRowItem">
					<label for="">Enter book ID:</label>
				</div>
				<div class="gridRowItem">
					<input type="text" name="book_id" value="<?php echo $bookID?>">
				</div>
			</div>
			<div class="gridColumnItem adminFormGap">
				<div class="gridRowItem">
					<span class="error"> <?php echo $bookIDError;?></span>
				</div>
			</div>
			<div class="spacer20v"></div>
			<div class="gridColumnItem adminFormGap">
					<span class="error"> <?php echo $errorText;?></span>
			</div>
			<div class="spacer20v"></div>
			<input type="submit" value="Delete">
		</form>
	</div>
	<div class="blueDiv"></div>

</body>
</html>
