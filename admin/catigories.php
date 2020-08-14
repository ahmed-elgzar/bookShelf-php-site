<?php
	error_reporting(0);
	include ("includes/config.php");
	include ("includes/header.php");
	$categoryName   = $_POST['category'];
	$addCategory	= $_POST['add'];

	$id 			= $_GET['id'];
	// Delete Category
	if (isset($id)){
		$query 	= "DELETE FROM catigories WHERE catID = '$id'";
		$delete = mysqli_query($con, $query); 
	}
?>

				<div class="col-md-10" id="main-area">
					<div class="add-category">
						<?php
							//========================
							//== ** Add category ** ==
							//========================

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
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="form-group">
								<label for="category" style="color: #FFF;">تصنيف جديد</label>
								<input type="text" name="category" class="form-control">
							</div>
							<button class="btn-custom form-control" name="add">إضافة</button>
						</form>
					</div>
					<div class="display-cat-mt-5">
						<?php
							//=================================
							//== ** View Categories Table ** ==
						 	//=================================

							// * This Table Show All Categories In Database Ordered By Oldest

							if (isset($delete)){
								echo "<div class='alert alert-success'>تم حذف التصنيف بنجاح</div>";
							}
						?>
						<table class="table table-ordered">
							<thead>
								<tr>
									<th>رقم التصنيف</th>
									<th>اسم التصنيف</th>
									<th>تاريخ الاضافة</th>
									<th>حذف التصنيف</th>
								</tr>
							</thead>
							<?php
								$query 	= "SELECT * FROM catigories ORDER BY catID DESC";
								$result = $con->query($query);
								$numper = 0;
								while ($row = mysqli_fetch_assoc($result)) {
									$numper++
							?>
							<tbody>
								<td style="color: #FFF"><?php echo $numper; ?></td>
								<td style="color: #FFF"><?php echo $row['catigoryName']; ?></td>
								<td style="color: #FFF"><?php echo $row['catigoryTime']; ?></td>
								<td style="color: #FFF"><a href="catigories.php?id=<?php echo $row['catID']; ?>"><button type="button" class="btn btn-dark">حذف التصنيف</button></a></td>
							</tbody>
							<?php
								}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		include("includes/footer.php");
	?>
	