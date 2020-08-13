<?php
	include ("includes/config.php");
	include ("includes/header.php");


	$id = $_GET['id'];

	if (isset($id)) {
		$query 	= "DELETE FROM Books WHERE bookID = '$id'";
		$delete = mysqli_query($con, $query);
	}
?>
	<div class="col-md-10" id="main-area">
		<div class="books" style="margin-top: 30px;">
			<?php
			if (isset($delete)){
				echo "<div class='alert alert-success'>تم حذف الكتاب بنجاح</div>";
			}
			?>
			<h3 style="color: #FFF;">كل الكتب</h3>
			<table class="table table-ordered">
					<thead>
						<tr>
							<th>رقم الكتاب</th>
							<th>صورة الكتاب</th>
							<th>عنوان الكتاب</th>
							<th>الؤلف</th>
							<th>تصنيف الكتاب</th>
							<th>تاريخ الاضافة</th>
							<th>حذف الكتالب</th>
						</tr>
					</thead>
						<?php
							$query 	= "SELECT * FROM Books ORDER BY bookID DESC";
							$result = $con->query($query);
							$numper = 0;
							while ($row = mysqli_fetch_assoc($result)) {
								$numper++
						?>
					<tbody>
						<td style="color: #FFF"><?php echo $numper; ?></td>
						<td style="color: #FFF"><img src="img/<?php echo $row['book_img']; ?>" style="width: 50px;"></td>
						<td style="color: #FFF"><?php echo $row['book_title']; ?></td>
						<td style="color: #FFF"><?php echo $row['book_author']; ?></td>
						<td style="color: #FFF"><?php echo $row['book_cat']; ?></td>
						<td style="color: #FFF"><?php echo $row['bookDate']; ?></td>
						<td style="color: #FFF"><a href="books.php?id=<?php echo $row['bookID']; ?>"><button type="button" class="btn btn-dark">حذف الكتاب</button></a></td>
					</tbody>
						<?php
							}
						?>
			</table>
		</div>
	</div>
<?php
	include ("includes/footer.php")
?>