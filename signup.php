<?php include "signup_backend.php";?>
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
					<a href="#about">About</a>
				</div>
				<div class="gridRowItem navLink">
					<a href="#review">Review</a>
				</div>
				<div class="gridRowItem navLink">
					<a href="#">Gallery</a>
				</div>
				<div class="gridRowItem navLink">
					<a href="#contact">Contact Us</a>
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
	<div id="about" class="blueDiv">
		<center class="colorBlack">Customer Registration</center>
	</div>

	<div style="padding-top: 10px;"></div>

	<div class="signUp">
		<div class="other gridRowItem">
			<img src="images/sampleMobileUser.png" alt="" height="250">
		</div>
		<div class="contactUs gridRowItem">
			<div class="contactUsText">Sign up</div>
			<div class="contactUsItem">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<label for="">Name:*</label>
					<span class="error"> <?php echo $nameError;?></span>
					<input type="text" name="name" placeholder="Full name" value="<?php echo $name;?>">
					<div class="spacer20v"></div>
					<label for="">Phone:*</label>
					<span class="error"> <?php echo $phoneError;?></span>
					<input type="text" name="phone" placeholder="+8801234567890" value="<?php echo $phone;?>">
					<div class="spacer20v"></div>
					<label for="">Password:*</label>
					<span class="error"> <?php echo $passwordError;?></span>
					<input type="password" name="password" placeholder="********" value="<?php echo $password;?>">
					<div class="spacer20v"></div>
					<input type="checkbox" name="terms">
					<label class="termLabel" for="terms">I agree to the terms and conditions</label>
					<div class="spacer20v"></div>
					<div class="spacer20v"></div>
					<input type="submit" value="Sign up">
				</form>
			</div>
		</div>
	</div>
	<div class="blueDiv">
	</div>

</body>
</html>
