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
							<h1><?= $pricingtitle['titlemenufour']; ?></h1>
							<h2><?= $pricingtitle['description']; ?> <a href="<?= $pricingtitle['titleurl']; ?>" target="_blank"><?= $pricingtitle['title']; ?></a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					<?php
					$conn = mysqli_connect('localhost','root','','akash');
					$query="SELECT * FROM contactinfo";
					$result=mysqli_query($conn,$query);
					$contactinfo=mysqli_fetch_assoc($result);

				?>
					
					<div class="fh5co-contact-info">
						<h3><?= $contactinfo['sectiontitle']; ?></h3>
						<ul>
							<li class="<?= $contactinfo['iconname']; ?>"><?= $contactinfo['address']; ?></li>

							<?php 
								$result=mysqli_query($conn,$query);
								while($contactinfo=mysqli_fetch_assoc($result)){
							 ?>

							<li class="<?= $contactinfo['icon_class']; ?>"><a href="<?= $contactinfo['descripurl']; ?>"><?= $contactinfo['description']; ?></a>
							</li>
							<?php } ?>
							<!-- <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li> -->
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
	<div id="map" class="fh5co-map">
		<?php 
		$conn = mysqli_connect('localhost','root','','akash');
		$sql="SELECT * FROM googlemap";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);

		?>
		<div class="mapouter"><div class="gmap_canvas"><iframe width="1350" height="500" id="gmap_canvas" src="<?= $row['mapurl']; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1350px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1350px;}</style></div>
		
	</div>

	
<?php include('newslettersection.php'); ?>
<?php include('footer.php'); ?>

