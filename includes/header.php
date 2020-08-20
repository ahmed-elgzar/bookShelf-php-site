<!DOCTYPE html>
<html>
<head>
	<title>bookshelf</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-rtl.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- start navbar -->
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
				<a href="index.php" class="navbar-brand">BookShelf</a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="menu">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="index.php" class="nav-link">الرئيسية</a>
						</li>
						<li class="nav-item">
							<a href="categories.php" class="nav-link">تصنيفات</a>
						</li>
						<li class="nav-item">
							<a href="authors.php" class="nav-link">المؤلفون</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">تواصل معنا</a>
						</li>
					</ul>
					<form  action="search.php" method="post" class="form-inline">
    					<input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
    					<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> بحث</button>
  					</form>
				</div>
		</nav>
	<!-- end navbar -->
	<!-- start content-->
				<div class="row">
				<div class="col-md-9">