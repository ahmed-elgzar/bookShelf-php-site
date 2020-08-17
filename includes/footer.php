</div>
<div class="col-md-3" id="side-area">
					<div class="container-fluid">
						<h4 >تصنيفات الكتب</h4>
						<ul>
							<?php
								$query = "SELECT catigoryName FROM catigories";
								$result = $con->query($query);
								while ($row = mysqli_fetch_assoc($result)){
							?>
							<li>
								<a href="category.php?cat=<?php echo $row['catigoryName']; ?>">
									<span><i class="fas fa-tags"></i></span>
									<span><?php echo $row['catigoryName']; ?></span>
								</a>
							</li>
							<?php
								}
							?>
						</ul>	
					</div>
			</div>
			</div>
		
	<!-- end content -->
	<!-- start footer -->
		<footer>
			<a href="#">جميع الحقوق محفوظة 	&copy; 2020</a>
		</footer>
	<!--end footer -->

	
	<script src="js/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/03757ac844.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>