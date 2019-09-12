		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<?php 
							$conn = mysqli_connect('localhost','root','','akash');
							$sql="SELECT * FROM course";
							$result=mysqli_query($conn,$sql);
							$rowcourse=mysqli_fetch_assoc($result);

					 ?>
					<h2><?= $rowcourse['heading']; ?></h2>
					<p><?= $rowcourse['smalltitle']; ?> </p>
				</div>
			</div>
		</div>		
		<div class="fh5co-explore fh5co-explore1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-5 animate-box">
						<img class="img-responsive" src="../<?php echo $rowcourse['photourl']; ?>" alt="work">
					</div>
					<div class="col-md-4 col-md-pull-8 animate-box">
						<div class="mt">
							<h3><?= $rowcourse['title']; ?></h3>
							<p><?= $rowcourse['description']; ?></p>
							<ul class="list-nav">
								<li><i class="icon-check2"></i><?= $rowcourse['firsttext']; ?></li>
								<li><i class="icon-check2"></i><?= $rowcourse['secondtext']; ?></li>
								<li><i class="icon-check2"></i><?= $rowcourse['thirdtext']; ?></li>
							</ul>
							<p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="<?= $rowcourse['buttonlink']; ?>"><i class="icon-play"></i> <?= $rowcourse['button']; ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-explore">
			<div class="container">
				<div class="row">
					<?php 
						$sql="SELECT * FROM project";
						$result=mysqli_query($conn,$sql);
						$rowproject=mysqli_fetch_assoc($result);

					 ?>
					<div class="col-md-8 col-md-pull-1 animate-box">
						<img class="img-responsive" src="../<?php echo $rowproject['photourl']; ?>" alt="work">
					</div>
					<div class="col-md-4 animate-box">
						<div class="mt">
							<div>
								
								<h4><i class="icon-user"></i><?= $rowproject['firsttile']; ?></h4>
								<p></i><?= $rowproject['fistdescription']; ?> </p>
							</div>
							<div>
								<h4><i class="icon-video2"></i></i><?= $rowproject['titletwo']; ?></h4>
								<p></i><?= $rowproject['titletwodescription']; ?></p>
							</div>
							<div>
								<h4><i class="icon-shield"></i></i><?= $rowproject['titlethree']; ?></h4>
								<p></i><?= $rowproject['titlethreedescription']; ?> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
