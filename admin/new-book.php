<?php
	//error_reporting(0);		
	include("includes/header.php");
	session_start();
	if(!isset($_SESSION['id'])){
			echo "<div class='alert alert-danger'>" . "غير مسموح لك بتصفح هذه الصفحة مباشرة" . "</div>";
			header('REFRESH:2;URL=login.php');
			}else{
				include ("includes/sidebar.php");
?>
 	<div class="col-md-10" id="main-area">
		<div class="new-book">
			<?php
				//========================
				//== ** Add New Book ** ==
				//========================
			if (isset($_POST['bookTitle']) || isset($_POST['author']) || isset($_POST['bookCategory']) || isset($_FILES['postImg']) || isset($_POST['aboutBook'])) {
				$bookTitle 		= $_POST['bookTitle'];
				$author 		= $_POST['author'];
				$bookCategory	= $_POST['bookCategory'];
				$imageName 		= $_FILES['bookImg']['name'];
				$imageTmp 		= $_FILES['bookImg']['tmp_name'];
				$fileName 		= $_FILES['bookFile']['name'];
				$fileTmp 		= $_FILES['bookFile']['tmp_name'];
				$about 			= $_POST['aboutBook'];	
			}
			
			if(isset($_POST['upload'])){

				if (empty($bookTitle) || empty($author) || empty($about)){
					echo "<div class='alert alert-danger'>عفوا لايمكمك ترك هذه الحقول فارغة</div>";
				}else{
					
					$bookimage = rand(0,1000)."_".$imageName;
					$bookfile = rand(0,1000)."_".$fileName;

					move_uploaded_file($imageTmp, "img/" . $bookimage);
					move_uploaded_file($fileTmp, "book/" . $bookfile);
					
					$query = "INSERT INTO Books (book_title,book_author,book_cat,book_img,book_file,about_book) VALUES ('$bookTitle','$author','$bookCategory','$bookimage','$bookfile','$about')";
					mysqli_query($con, $query);
				}
			}
				
			?>
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="bookTitle" style="color: #FFF;">عنوان الكتاب</label>
					<input type="text" name="bookTitle" class="form-control">
				</div>
				<div class="form-group">
					<label for="author" style="color: #FFF;">اسم المؤلف</label>
					<input type="text" name="author" class="form-control">
				</div>
				<div class="form-group">
					<label for="bookCategory" style="color: #FFF;">تصنيف الكتاب</label>
					<select name="bookCategory" id="bookCategory" class="form-control">
						<?php
							$query = "SELECT catigoryName FROM catigories";
							$result = mysqli_query($con, $query);
							while($row = mysqli_fetch_assoc($result)){
						?>
							<option>
								<?php echo $row['catigoryName'] ?>
							</option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="image" style="color: #FFF;">صورة الكتاب</label>
					<input type="file" name="bookImg" id="image" class="form-control">
				</div>
				<div class="form-group">
					<label for="book" style="color: #FFF;">ملف الكتاب</label>
					<input type="file" name="bookFile" id="book" class="form-control">
				</div>
				</div class="form-group">
					<label for="aboutBook" style="color: #FFF;">نبذة عن الكتاب</label>
					<textarea id="" cols="30" rows="10" class="form-control ckeditor" name="aboutBook"></textarea>
					<button class="btn-dark form-control" name="upload" style="margin-top: 10px;">نشر الكتاب</button>
				</div>
			</form>
		</div>
	</div>
			
<?php
	}
	include("includes/footer.php");
?>