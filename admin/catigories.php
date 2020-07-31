<?php
	include ("includes/config.php");
	$categoryName   = $_POST['category'];
	$addCategory	= $_POST['add'];

	// add category
	if (isset($addCategory)) {
		if(empty($categoryName)) {
			echo "<div class='alert alert-danger'>" . "حقل التصنيف فارغ" . "</div>";
		}elseif ($categoryName > 100) {
			echo "<div calss='alert alert-danger'>" . "عنوان التصنيف كبير جدا" . "</div>";
		}else {
			$query = "INSERT INTO catigories(catigoryName) VALUES ('$categoryName')";
			mysqli_query($con, $query);
			echo "<div class='alert alert-success'>" . "تمت اضافة تصنيف جديد" . "</div>";
		}
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
	</head>
<body>
	<!-- start content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2" id="side-area">
					<h4>لوحة التحكم</h4>
					<ul>
						<li>
							<a href="catigories.php">
								<span><i class="fas fa-tags"></i></span>
								<span>التصنيفات</span>
							</a>
						</li>
						<!-- Articles -->
						<li data-toggle="collapse" data-target="#menu">
							<a href="#">
								<span><i class="fas fa-newspaper"></i></span>
								<span>المقالات</span>
								<span><i class="fas fa-sort-down"></i></span>
							</a>
						</li>
						<ul class="collapse" id="menu">
							<li>
								<a href="new-post.php">
									<span><i class="far fa-edit"></i></span>
									<span>مقال جديد</span>
								</a>
							</li>
							<li>
								<a href="posts.php">
									<span><i class="fas fa-th-large"></i></span>
									<span>كل المقالات</span>
								</a>
							</li>
						</ul>

						<li>
							<a href="index.php" target="_blank">
								<span><i class="fas fa-window-restore"></i></span>
								<span>عرض الموقع</span>
							</a>
						</li>
						<li>
							<a href="logout.php">
								<span><i class="fas fa-sign-out-alt"></i></span>
								<span>تسجيل الخروج</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-10" id="main-area">
					<div class="add-category">
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="form-group">
								<label for="category">تصنيف جديد</label>
								<input type="text" name="category" class="form-control">
							</div>
							<button class="btn-custom form-control" name="add">إضافة</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- start footer -->
		<footer>
			<a href="#">جميع الحقوق محفوظة 	&copy; 2020</a>
		</footer>
	<!--end footer -->
	<script src="js/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/03757ac844.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
	