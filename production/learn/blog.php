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
							<h1><?= $pricingtitle['titlemenuthree']; ?></h1>
							<h2><?= $pricingtitle['description']; ?> <a href="<?= $pricingtitle['titleurl']; ?>" target="_blank"><?= $pricingtitle['title']; ?></a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row">

				<?php 
					$conn = mysqli_connect('localhost','root','','akash');
					$sql="SELECT * FROM recentpost";
					$result=mysqli_query($conn,$sql);
					while($row_rec_post=mysqli_fetch_assoc($result)){

				?>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="../<?=$row_rec_post['photourl'];  ?>" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#><?=$row_rec_post['title'];  ?></a></h3>
							<span class="posted_on"><?=$row_rec_post['created_date'];  ?></span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p><?=$row_rec_post['description'];  ?></p>
							<a href="<?=$row_rec_post['buttonurl'];  ?>" class="btn btn-primary"><?=$row_rec_post['button'];  ?></a>
						</div> 
					</div>
				</div>
				<?php } ?>

			</div>
		</div>
	</div>
	
	


	<?php include('newslettersection.php'); ?>
	<?php include('footer.php'); ?>