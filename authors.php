<?php
	include ("admin/includes/config.php");
	include ("includes/header.php");

	$query = "SELECT book_author FROM Books";
	$result 	= mysqli_query($con, $query);
?>
		<div class="row" id="categories">
		<?php
			while ($row = mysqli_fetch_assoc($result)) {

		?>
		<div class="col-sm-3" id="category">
			<a href="author.php?name=<?php echo $row['book_author']; ?>"><?php echo $row['book_author']; ?></a>
		</div>
		<?php
			}
		?>
</div>

<?php
	include ("includes/footer.php");
?>