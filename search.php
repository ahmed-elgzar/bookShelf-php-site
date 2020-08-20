<?php
	include ("admin/includes/config.php");
	include ("includes/header.php");
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<div class="form-group" style="margin-right: 10px;">
		<label for="search" style="color: #FFF;"></label>
		<input type="text" name="search" class="form-control" placeholder="إبحث عن كتاب او مؤلف او تصنيف">
	</div>
	<div class="form-group" style="margin-right: 10px;">
		<button type="submit" class="btn btn-dark form-control"><i class="fas fa-search"></i> بحث</button>
	</div>
</form>

<div class="row" id="books">
	<?php
		if(isset($_POST['search'])){
			$searchq = $_POST['search'];

			$query 	= "SELECT * FROM Books WHERE book_title LIKE '$searchq' OR book_cat LIKE '$searchq' OR book_author LIKE '$searchq'";
			$result = mysqli_query($con, $query);
			$count 	= mysqli_num_rows($result);

			if($count == 0){
				echo "عفوا !! لا تتطابق اى نتائج مع بحثك";
			}else{

				while ($row = mysqli_fetch_assoc($result)) {
	?>
	<div class="col-sm-3" id="post">
		<img src="admin/img/<?php echo $row['book_img']; ?>">
		<h4><?php echo $row['book_title']; ?></h4>
		<h6><?php echo $row['book_author']; ?></h6>
		<a href="book.php?id=<?php echo $row['bookID']; ?>">تحميل الكتاب</a>
	</div>
	<?php
		
				}
			}
		}
	?>
</div>

<?php
	include ("includes/footer.php");
?>