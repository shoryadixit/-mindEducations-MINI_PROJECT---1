<?php 

session_start();
include 'config.php';

error_reporting(0);

if (isset($_SESSION['tutorname'])) {
    header("Location: welcome.php");
}

if (isset($_SESSION['user'])){
	header("Location: ../mind/index.php");
}	

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM tutor WHERE email='$email'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		if ($password == $row['password']){
			$_SESSION['tutoruser'] = $row['username'];
			$_SESSION['is_login'] = true;
			header("Location: ../mind/index.php");
		} else {
			echo "<script>alert('Woops! Password is Wrong. !!!')</script>";
		}
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong. If you are new Register Now !!!')</script>";
	}
}


?>

<a href="../mind/index.php"></a>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="./style.css">

	<title>Tutor Login</title>
</head>
<body>
	<div class="container">
		<form action="index.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;"><u> Tutor-Login </u></p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn"><a href="index.php" style="text-decoration: none; color: white;">Login</a></button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>