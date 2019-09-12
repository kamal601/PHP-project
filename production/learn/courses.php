<?php include('header.php'); ?>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
				<?php
					$conn = mysqli_connect('localhost','root','','akash');
					$query="SELECT * FROM pricingpagetitle";
					$result=mysqli_query($conn,$query);
					($pricingtitle=mysqli_fetch_assoc($result))

				?>
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><?= $pricingtitle['titlemenutwo']; ?></h1>
							<h2><?= $pricingtitle['description']; ?> <a href="<?= $pricingtitle['titleurl']; ?>" target="_blank"><?= $pricingtitle['title']; ?></a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-explore" class="fh5co-bg-section">
		<?php include('COurse Section.php'); ?> 
	</div>

	<div id="fh5co-project">

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
	

	<?php include('newslettersection.php'); ?>
	<?php include('footer.php'); ?>

