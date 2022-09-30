<?php
	session_start();
	include "gallery_backend.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>www.bookstore.com</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="greenDiv">
		<div class="navbar">
			<div class="navLeftItem">
				<div class="gridRowItem navLink">
					<a href="index.html">Home</a>
				</div>
				<div class="gridRowItem navLink">
					<a href="index.html#about">About</a>
				</div>
				<div class="gridRowItem navLink">
					<a href="index.html#review">Review</a>
				</div>
				<div class="gridRowItem navLink">
					<a href="gallery.php">Gallery</a>
				</div>
				<div class="gridRowItem navLink">
					<a href="index.html#contact">Contact Us</a>
				</div>
			</div>
			<div class="navRightItem">
				<div class="gridRowItem navLink">
					<a href="signup.php">Sign up</a>
				</div>
				<div class="gridRowItem navLink">
					<p>/</p>
				</div>
				<div class="gridRowItem navLink">
					<a href="signin.php">Sign in</a>
				</div>
				<div class="gridRowItem navLink">
					/
				</div>
				<div class="gridRowItem navLink">
					<a href="admin_signin.php">Admin section</a>
				</div>
			</div>
		</div>
	</div>
	<div class="spacer20v"></div>
	<div class="greenDiv">
		<center class="colorBlack">Gallery</center>
	</div>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="gallery justifyCenter">
			<?php 
				if(!empty($errorText)){
					echo "
						<div class='galleryItem'>
							<div class='gridColumnItem justifyCenter'>
								<p class='error'>$errorText</p>
							</div>
						</div>
					";
				}
				foreach ($books as $key => $value) {
					echo "
						<div class='galleryItem'>
							<div class='gridColumnItem justifyCenter'>
								<img src='images/sampleBook.png' alt='' height='60'>
							</div>
							<div class='gridColumnItem justifyCenter'>
								<p class='centerText'>$value[name]</p>
							</div>
							<div class='gridColumnItem justifyCenter'>
								Price: $value[price] taka
							</div>
							<div class='gridColumnItem'>
								<input hidden type='text' name='order_book_id' value='$value[book_id]'>
								<p class='centerText'><input type='submit' value='Order'></p>
							</div>
						</div>
					";
				}
			?>
			<!-- <div class="galleryItem">
				<div class="gridColumnItem">
					<img src="images/sampleBook.png" alt="" height="60">
					<p>Book name</p>
				</div>
			</div> -->
		</div>
	</form>
	<div style="padding-top: 10px;"></div>

	<div class="blueDiv"></div>

</body>
</html>
