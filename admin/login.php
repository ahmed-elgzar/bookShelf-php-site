<?php
	error_reporting(0);	
	include ("includes/config.php");
	session_start();
	if(isset($_SESSION['username'])){
		header('location: catigories.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>لوحة التحكم</title>
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-rtl.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
		.login{
			color: #FFF;
			width: 300px;
			margin: 80px auto;
		}
		.login h5{
			margin-bottom: 20px;
			text-align: center;
		}
		.login button{
			margin-right: 80px;
			width: 150px;
		}
	</style>
</head>
<body>
	<div class="login">
		<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST'){
					$email = $_POST['email'];
					$password = $_POST['password'];
					
					$query = "SELECT *  FROM admins WHERE email = '$email'	AND password = '$password' ";
					$result = mysqli_query($con, $query);
					$row	= mysqli_fetch_assoc($result);

					if(in_array($email, $row) && in_array($password, $row)){
						$_SESSION['username'] = $row['name'];
						$_SESSION['id'] = $row['id'];
						header('location: catigories.php');
						exit();
					}else {
						echo "<div class='alert alert-danger'>" . "البريد الالكتروني او كلمة المرور غير صحيحة" . "</div>";
					}
				}
			?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

			<h5>تسجيل الدخول</h5>
			<div class="form-group">
				<label for="mail">البريد الإلكتروني</label>
				<input type="text" class="form-control"  id="mail" name="email">
			</div>
			<div class="form-group">
				<label for="pass">كلمة المرور</label>
				<input type="password" class="form-control"  id="pass" name="password">
			</div>
			<div class="form-group">
				<button class="btn-custom" name=login>تسجيل الدخول</button>
			</div>
		</form>

	<script src="js/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/03757ac844.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>