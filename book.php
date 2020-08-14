<?php
	include ("admin/includes/config.php");
	include ("includes/header.php");

	$id 	= $_GET['id']; 
	$query 	= "SELECT * FROM Books WHERE bookID = '$id'";
	$result = mysqli_query($con, $query);
	$row	= mysqli_fetch_assoc($result);
?>

<div class="book">
	<div class="row">
		<div class=".col-12 .col-sm-6 .com-md-8">
			<img src="admin/img/<?php echo $row['book_img'] ?>" class="rounded">
		</div>
		<div class="col-6 .col-md-4">
			<h3><?php echo $row['book_title']; ?></h1>
			<h4>المؤلف : <?php echo $row['book_author']; ?></h4>
			<h5>تصنيف الكتاب : <?php echo $row['book_cat']; ?></h5>
		</div>
	</div>
	<h3 style="margin: 20px 0;">عن الكتاب</h3>
	<p><?php echo $row['about_book']; ?></p>
	<div class="text-center" style="margin: 50px 0;">
		<a href="admin/book/<?php echo $row['book_file']; ?>" class="btn btn-success" style="text-align: center;"><i class="fa fa-download"></i> تحميل الكتاب</a>
	</div>
</div>

<?php
	include ("includes/footer.php");
?>