<?php include "admin_insert_backend.php";?>
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
		<center class="colorBlack">Insert information</center>
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
				<span class="error"> <?php echo $bookIDError;?></span>
			</div>
			<div class="gridColumnItem adminFormGap">
				<div class="spacer20v"></div>
			</div>
			<div class="gridColumnItem adminFormGap">
				<div class="gridRowItem">
					<label for="">Book name:</label>
				</div>
				<div class="gridRowItem">
				<input type="text" name="book_name" value="<?php echo $bookName?>">
				</div>
			</div>
			<div class="gridColumnItem adminFormGap">
				<span class="error"> <?php echo $bookNameError;?></span>
			</div>
			<div class="gridColumnItem adminFormGap">
				<div class="spacer20v"></div>
			</div>
			<div class="gridColumnItem adminFormGap">
				<div class="gridRowItem">
					<label for="">Category:</label>
				</div>
				<div class="gridRowItem">
					<select name="category" value="<?php echo $category?>">
						<option value="CSE">CSE</option>
						<option value="EEE">EEE</option>
						<option value="Civil">Civil</option>
					</select>
				</div>
			</div>
			<div class="gridColumnItem adminFormGap">
				<span class="error"> <?php echo $categoryError;?></span>
			</div>
			<div class="gridColumnItem adminFormGap">
				<div class="spacer20v"></div>
			</div>
			<div class="gridColumnItem adminFormGap">
				<div class="gridRowItem">
					<label for="">Quantity:</label>
				</div>
				<div class="gridRowItem">
					<input type="text" name="quantity" value="<?php echo $quantity?>">
				</div>
			</div>
			<div class="gridColumnItem adminFormGap">
				<span class="error"> <?php echo $quantityError;?></span>
			</div>
			<div class="gridColumnItem adminFormGap">
				<div class="spacer20v"></div>
			</div>
			<div class="gridColumnItem adminFormGap">
				<div class="gridRowItem">
					<label for="">Price:</label>
				</div>
				<div class="gridRowItem">
					<input type="text" name="price" value="<?php echo $price?>">
				</div>
			</div>
			<div class="gridColumnItem adminFormGap">
				<span class="error"> <?php echo $priceError;?></span>
			</div>
			<div class="spacer20v"></div>
			<div class="gridColumnItem adminFormGap">
				<span class="error"> <?php echo $errorText;?></span>
			</div>
			<div class="gridColumnItem adminFormGap">
				<div class="spacer20v"></div>
			</div>
			<input type="submit" value="Submit">
		</form>
	</div>
	<div class="blueDiv"></div>

</body>
</html>
