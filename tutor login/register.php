<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['tutoruser'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

	$pass = password_hash($password, PASSWORD_BCRYPT);

	$token = bin2hex(random_bytes(15));

	$email_query = "SELECT * FROM tutor WHERE username = '$username'";
	$query = mysqli_query($conn, $email_query);
	
	$email_count = mysqli_num_rows($query);

	if($eamil_count > 0){
		echo "<script>alert('Tutor already exists, Try to login')";
		header('Location: index.php');
	}else if ($password == $cpassword) {
		$insert_query = "INSERT INTO tutor (username, email, password, token, status) 
						VALUES ('$username', '$email', '$password', '$token', 'inactive')";
		$result = mysqli_query($conn, $insert_query);
		if ($result) {
			echo "<script>alert('Check Your Email to Activate Your Account !!!')</script>";
            $subject = "Email Activation";
            $body = "Hi ,'.$username.' Click here to this link to activate your account.
            http://localhost/second/mind/tutor%20login/activate.php?token=$token.";
            $header = "From:mindeductions@gmail.com";
			if (mail($email, $subject, $body, $header)){
				echo"<script>alert('Check Your email to email to verify your account .$username.')</script>";
				header('Refresh: 0; URL= index.php');
			}
		} else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";
		}
	} else {
		echo "<script>alert('Password didn't matched')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;"><u>Tutor-Register</u></p>
			<div class="input-group">
				<input type="text" placeholder="Enter Your Name" name="name" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>
