<div class="container">
	<div class="heading text-center">
		<h2>I'm your guy</h2>
		<p class="lead">I will bring these qualities to your team with a great attitude to boot!</p>
	</div>
	<?php 
		$url = "./asset/qualities.json";
		$json = file_get_contents($url);
		$importData = json_decode($json, TRUE);
		$qualities = $importData["qualities"];
		for ($index = 0; $index<count($qualities); $index++) {
			$quality = $qualities[$index];
			?>
			<?php if($index%4 === 0) {
				echo '<div class="row">';
			} ?>
		<div class="col-xs-6 col-md-3 quality-card">
			<div class="thumbnail">
				<div class="frame-of-icon">
					<i class="<?php echo $quality["iconName"]; ?>"></i>
				</div>
				<h3 class="caption-title text-center"><?php echo $quality["title"]; ?></h3>
				<p><?php echo $quality["desc"]; ?></p>
			</div>
		</div>
			<?php if($index%4 === 3) {
				echo '</div>';
			} ?>
	<?php
		}
	 ?>
</div>