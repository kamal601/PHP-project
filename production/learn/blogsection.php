	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<?php 
						$conn = mysqli_connect('localhost','root','','akash');
						$sql="SELECT * FROM recentpost";
						$result=mysqli_query($conn,$sql);
						$row_rec_post=mysqli_fetch_assoc($result);

					 ?>
					<h2><?=$row_rec_post['sectiontitle'];  ?></h2>
					<p><?=$row_rec_post['sectiondescription'];  ?></p>
				</div>
			</div>
			<div class="row">

				<?php 
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