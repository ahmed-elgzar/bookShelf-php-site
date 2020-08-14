<?php
	include ("admin/includes/config.php");
	include ("includes/header.php");

	$query = "SELECT catigoryName FROM catigories";
	$result 	= mysqli_query($con, $query);
?>
		<div class="row" id="categories">
		<?php
			while ($row = mysqli_fetch_assoc($result)) {

		?>
		<div class="col-sm-3" id="category">
			<a href="category.php?cat=<?php echo $row['catigoryName']; ?>"><?php echo $row['catigoryName']; ?></a>
		</div>
		<?php
			}
		?>
</div>

<?php
	include ("includes/footer.php");
?>