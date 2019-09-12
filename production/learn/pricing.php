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
							<h1><?= $pricingtitle['titlemenu']; ?></h1>
							<h2><?= $pricingtitle['description']; ?> <a href="<?= $pricingtitle['titleurl']; ?>" target="_blank"><?= $pricingtitle['title']; ?></a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-pricing">
		<div class="container">
			<div class="row">
				<div class="pricing">
				<?php
					$query="SELECT * FROM pricing";
					$result=mysqli_query($conn,$query);
					while($pricing=mysqli_fetch_assoc($result)){

				?>
					<div class="col-md-3 animate-box">
						<div class="price-box <?= $pricing['status']; ?>">
							<h2 class="pricing-plan <?= $pricing['offerstatus']; ?>"><?= $pricing['package']; ?><span><?= $pricing['offer']; ?></span></h2>
							<div class="price"><sup class="currency"><?= $pricing['exchange']; ?></sup><?= $pricing['amount']; ?><small><?= $pricing['duration']; ?></small></div>
							<ul class="classes">
								<li><?= $pricing['firstfield']; ?></li>
								<li class="color"><?= $pricing['secondfield']; ?></li>
								<li><?= $pricing['thirdfield']; ?></li>
								<li class="color"><?= $pricing['fourthfield']; ?></li>
								<li><?= $pricing['fifthfield']; ?></li>
								<li class="color"><?= $pricing['sixthfield']; ?></li>
								<li><?= $pricing['seventhfield']; ?></li>
							</ul>
							<a href="<?= $pricing['buttonlink']; ?>" class="btn btn-select-plan btn-sm"><?= $pricing['button']; ?></a>
						</div>
					</div>
						<?php } ?>

				</div>
			</div>
		</div>
	</div>
	
<?php include('footer.php'); ?>
