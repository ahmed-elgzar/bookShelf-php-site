<?php
	include ("admin/includes/config.php");
	include ("includes/header.php");

	$author 	= $_GET['name'];

	$query		= "SELECT bookID, book_img, book_title, book_author FROM Books WHERE book_author = '$author'";
	$result 	= mysqli_query($con, $query);
?>
		<div class="row" id="books">
		<?php
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
		?>
</div>

<?php
	include ("includes/footer.php");
?>