<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<?php 
					$conn = mysqli_connect('localhost','root','','akash');
							$sql="SELECT * FROM footerfirst";
							$result=mysqli_query($conn,$sql);
							$row_footerfirst=mysqli_fetch_assoc($result);

					 ?>
					<h4><?=$row_footerfirst['firstcullumntitle'];  ?></h4>
					<p><?=$row_footerfirst['firstcullumntitledesc'];  ?></p>
				</div>
				<?php 
					$sql="SELECT * FROM footerfirst";
					$result=mysqli_query($conn,$sql);
					while($row_footerfirst=mysqli_fetch_assoc($result)){

				?>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">

					<h4><?=$row_footerfirst['title'];  ?></h4>
					<ul class="fh5co-footer-links">
						<li><a href="<?=$row_footerfirst['firstfieldurl'];  ?>"><?=$row_footerfirst['firstfield'];  ?></a></li>
						<li><a href="<?=$row_footerfirst['secondfieldurl'];  ?>"><?=$row_footerfirst['secondfield'];  ?></a></li>
						<li><a href="<?=$row_footerfirst['thirdfieldurl'];  ?>"><?=$row_footerfirst['thirdfield'];  ?></a></li>
						<li><a href="<?=$row_footerfirst['forthfieldurl'];  ?>"><?=$row_footerfirst['forthfield'];  ?></a></li>
						<li><a href="<?=$row_footerfirst['fifthfieldurl'];  ?>"><?=$row_footerfirst['fifthfield'];  ?></a></li>
					</ul>
				</div>
				<?php } ?>
<
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<?php 
							$sql="SELECT * FROM copyright";
							$result=mysqli_query($conn,$sql);
							$row_footercopyright=mysqli_fetch_assoc($result);

					 ?>
					<p>
						<small class="block"><?=$row_footercopyright['copyright'];  ?></small> 
						<small class="block"><?=$row_footercopyright['designheading'];  ?> <a href="<?=$row_footercopyright['Designerurl'];  ?>" target="_blank"><?=$row_footercopyright['designername'];  ?></a> <?=$row_footercopyright['demoimageheading'];  ?> <a href="<?=$row_footercopyright['imageurl'];  ?>" target="_blank"><?=$row_footercopyright['imagename'];  ?></a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<?php 
								$sql="SELECT * FROM copyright";
								$result=mysqli_query($conn,$sql);
								while($row_footercopyright=mysqli_fetch_assoc($result)){
							?>
							<li><a href="<?=$row_footercopyright['iconurl'];  ?>"><i class="<?=$row_footercopyright['iconname'];  ?>"></i></a></li>
							
						<?php } ?>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

