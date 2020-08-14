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
			<!-- start side bar -->
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
								<span>الكتب</span>
								<span><i class="fas fa-sort-down"></i></span>
							</a>
						</li>
						<ul class="collapse" id="menu">
							<li>
								<a href="new-book.php">
									<span><i class="far fa-edit"></i></span>
									<span>كتاب جديد</span>
								</a>
							</li>
							<li>
								<a href="books.php">
									<span><i class="fas fa-th-large"></i></span>
									<span>كل الكتب</span>
								</a>
							</li>
						</ul>

						<li>
							<a href="../index.php" target="_blank">
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