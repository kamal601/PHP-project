<div id="fh5co-started" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<?php 
							$sql="SELECT * FROM newsletter";
							$result=mysqli_query($conn,$sql);
							$row_newsletter=mysqli_fetch_assoc($result);

					 ?>
					<h2><?=$row_newsletter['sectiontitle'];  ?></h2>
					<p><?=$row_newsletter['sectiondescription'];  ?></p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="<?=$row_newsletter['button_url'];  ?>" class="btn btn-default btn-lg"><?=$row_newsletter['button_text'];  ?></a></p>
				</div>
			</div>
		</div>
	</div>