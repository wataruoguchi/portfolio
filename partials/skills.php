<div class="background-image"></div>
<div class="background-image-overlay"></div>
<div class="container">
	<div class="heading text-center">
		<h2>Skills</h2>
		<p class="lead">Resourceful skills are ready to go with your team.</p>
	</div>
	<?php 
		$url = "./asset/skills.json";
		$json = file_get_contents($url);
		$skills = json_decode($json, TRUE);
		$summaries = $skills["summaries"];
		for ($index = 0; $index<count($summaries); $index++) {
			$summary = $summaries[$index];
			?>
			<?php if($index%2 === 0) {
				echo '<div class="row">';
			} ?>
				<div class="col-sm-6">
					<div class="skill-card">
						<div class="row">
							<div class="col-xs-4 frame-of-icon">
								<i class="<?php echo $summary["iconName"]; ?>"></i>
							</div>
							<div class="col-sm-8">
								<div class="skill-name"><?php echo $summary["skillName"]; ?></div>
								<p><?php echo $summary["desc"]; ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php if($index%2 === 1) {
				echo '</div>';
			} ?>
		<?php
		} ?>
	<div class="row">
		<div class="col-sm-12">
			<div class="tool-box">
				<div class="tools-title text-center">My tools</div>
				<div class="tools text-center">
					<?php 
					$tools = $skills["tools"];
					for ($index = 0; $index<count($tools); $index++) {
						$tool = $tools[$index];
					 ?>
					<span class="tool btn" ng-repeat="tool in tools"><?php echo $tool["name"]; ?></span>
					<?php 
					} ?>
				</div>
			</div>
		</div>
	</div>
</div>
