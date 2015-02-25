<div class="container">
	<div class="heading text-center">
		<h2>Work</h2>
		<p class="lead">Work gallery I've done in last a year.</p>
	</div>
	<div class="row">
		<div class="col-md-12">
			<!-- items start -->
			<div class="row gallery-container">
				<!-- item start -->
				<?php 
				$url = "./asset/works.json";
				$json = file_get_contents($url);
				$importData = json_decode($json, TRUE);
				$works = $importData["works"];
				for ($index = 0; $index<count($works); $index++) {
					$work = $works[$index];
					?>
				<div class="col-sm-6 col-md-4 gallery-item web-design">
					<div class="img-box">
						<div class="overlay-container">
							<div class="thumbnail-image" style="background-image: url(<?php echo $work['thumbnailImage']; ?>)"></div>
							<a class="overlay" data-toggle="modal" data-target="#project-<?php echo $index; ?>">
								<i class="fa fa-search-plus"></i>
							</a>
						</div>
						<a class="btn btn-default btn-block work-btn" data-toggle="modal" data-target="#project-<?php echo $index; ?>"><?php echo $work['shortTitle']; ?></a>
					</div>
					<!-- Modal start -->
					<div class="modal fade" id="project-<?php echo $index; ?>" tabindex="-1" role="dialog" aria-labelledby="project-<?php echo $index; ?>-label" aria-hidden="true">
						<div class="modal-content col-md-10 col-md-offset-1">
							<!-- modal header start -->
							<div class="modal-header">
								<button class="close" type="button" data-dismiss="modal">
									<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title" id="project-<?php echo $index; ?>-label"><?php echo $work['title']; ?></h4>
							</div>
							<!-- modal header end -->
							<!-- modal body start -->
							<div class="modal-body">
								<h3>Project Description</h3>
								<div class="row">
									<div class="col-md-5">
										<p class="work-description"><?php echo $work['description']; ?></p>
									</div>
									<div class="col-md-7 img-box"><img src="<?php echo $work['thumbnailImage']; ?>" alt=""></div>
								</div>
							</div>
							<!-- modal body end -->
							<!-- modal footer start -->
							<div class="modal-footer">
								<button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
							</div>
							<!-- modal footer end -->
						</div>
					</div>
					<!-- Modal end -->
				</div>
				<?php
					}
				 ?>
				<!-- item end -->
			</div>
			<!-- items end -->
		</div>
	</div>
</div>
