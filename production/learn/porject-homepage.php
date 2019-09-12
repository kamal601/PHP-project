

<?php include('header.php'); ?>
	
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<?php 
							$conn = mysqli_connect('localhost','root','','akash');
							$sql="SELECT * FROM homeheading";
							$result=mysqli_query($conn,$sql);
							$row=mysqli_fetch_assoc($result);

					 ?>
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><?= $row['title']; ?></h1>
							<h2><?= $row['smalltitle']; ?><a href="<?= $row['textlink']; ?>" target="_blank">  <?= $row['linktext']; ?></a></h2>
							<p><a class="btn btn-primary btn-lg btn-learn" href="<?= $row['firstbtnlink']; ?>"><?= $row['firstbtntext']; ?></a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="<?= $row['secbtnlink']; ?>"><i class="icon-play"></i> <?= $row['secbtntext']; ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-counter" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<?php
					$query="SELECT * FROM cuntdown";
					$result=mysqli_query($conn,$query);
					while($count=mysqli_fetch_assoc($result)){

				?>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $count['countnumber']; ?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label"><?php echo $count['title']; ?></span>
				</div>

			<?php } ?>
			</div>
		</div>
	</div>

	<div id="fh5co-explore" class="fh5co-bg-section">

		<?php include('COurse Section.php'); ?> 

	</div>
	
	<div id="fh5co-project">
		<div class="container">
			<div class="row animate-box">
				<?php 
						$sql="SELECT * FROM projecttitle";
						$result=mysqli_query($conn,$sql);
						$rowfinishproject=mysqli_fetch_assoc($result);

					 ?>
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2><?= $rowfinishproject['title']; ?></h2>
					<p><?= $rowfinishproject['description']; ?></p>
				</div>
			</div>
		</div>
		<div class="container-fluid proj-bottom">
			<div class="row">
				<?php
					$query="SELECT * FROM finishproject";
					$result=mysqli_query($conn,$query);
					while($finishproject=mysqli_fetch_assoc($result)){

				?>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="<?= $finishproject['projecturl']; ?>"><img src="../<?= $finishproject['photourl']; ?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3><?= $finishproject['title']; ?></h3>
						<span><?= $finishproject['name']; ?></span>
					</a>
				</div>
			<?php } ?>

			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="features">
					<?php 
							$sql="SELECT * FROM finishprojectlast";
							$result=mysqli_query($conn,$sql);
							$rowprofnshlast=mysqli_fetch_assoc($result);

					 ?>
					<div class="col-md-4 animate-box">
						<h4><?= $rowprofnshlast['firsttile']; ?></h4>
						<p><?= $rowprofnshlast['firstdescription']; ?></p>
					</div>
					<div class="col-md-4 animate-box">
						<h4><?= $rowprofnshlast['secontitle']; ?></h4>
						<p><?= $rowprofnshlast['secondescription']; ?> </p>
					</div>
					<div class="col-md-4 animate-box">
						<h4><?= $rowprofnshlast['thirdtitle']; ?></h4>
						<p><?= $rowprofnshlast['thirddescription']; ?>  </p>
					</div>
				</div>
				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-lg btn-learn" href="<?= $rowprofnshlast['buttonurl']; ?>"><?= $rowprofnshlast['button']; ?></a></p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-steps">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<?php 
							$sql="SELECT * FROM startcourse";
							$result=mysqli_query($conn,$sql);
							$row_start_course=mysqli_fetch_assoc($result);

					 ?>
					<h2><?= $row_start_course['sectiontitle']; ?></h2>
					<p><?= $row_start_course['sectiondescription']; ?></p>
				</div>
			</div>

			<div class="row bs-wizard animate-box" style="border-bottom:0;">
                
				<?php 
					$sql="SELECT * FROM startcourse";
					$result=mysqli_query($conn,$sql);
					while($row_start_course=mysqli_fetch_assoc($result)){
				?>
				
				<div class="col-xs-3 bs-wizard-step <?= $row_start_course['status']; ?>">
					<div class="text-center bs-wizard-stepnum"><h4><?= $row_start_course['coursestep']; ?></h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="<?= $row_start_course['doturl']; ?>" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p><?= $row_start_course['coursetitle']; ?></p></div>
				</div>
				<?php } ?>

			</div>

		</div>
	</div>

	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<?php 
						$sql="SELECT * FROM testimonial";
						$result=mysqli_query($conn,$sql);
						$row_testimonial=mysqli_fetch_assoc($result);

					 ?>
					<h2><?=$row_testimonial['title'];  ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<?php 
								$sql="SELECT * FROM testimonial";
								$result=mysqli_query($conn,$sql);
								while($row_testimonial=mysqli_fetch_assoc($result)){

				?>
							
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="../<?=$row_testimonial['photourl'];  ?>" alt="user">
									</figure>
									<span><?php echo $row_testimonial['name'];  ?> <a href="<?=$row_testimonial['socialurl'];  ?>" class="twitter"><?php echo $row_testimonial['social'];  ?></a></span>
									<blockquote>
										<p>&ldquo;<?php echo $row_testimonial['quote'];  ?>&rdquo;</p>
									</blockquote>
								</div>
							</div>
						<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php include('blogsection.php'); ?>
<?php include('newslettersection.php'); ?>
<?php include('footer.php'); ?>