<?php
	get_header();
?>
	<section class="logo">
		<img src="<?php echo get_template_directory_uri (); ?>/imgs/sumwars.png" alt="">
	</section>
	<div class="image-background">
		<img src="<?php echo get_template_directory_uri (); ?>/imgs/priest.jpg" alt="">
	</div>
	<article>
		<section class="download">
			<div class="wrap">
				<iframe class="video" width="640" height="360" src="//www.youtube.com/embed/fPXatVmAS7E?rel=0" frameborder="0" allowfullscreen></iframe>
				<div class="info">
					<h1>Defeat the infinite dialogs</h1>
					<p>Get immerse on the intense action and press the skip button. Be a warrior or a lazy wizard. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam diam velit, dapibus in varius et, mattis a massa. Sed ornare nibh quis elit lobortis lobortis varius id arcu. Nunc a dapibus lacus. Etiam vehicula malesuada dolor, non varius mi imperdiet lacinia. Pellentesque ut aliquet massa. In hac habitasse platea dictumst. Aenean eget tempor turpis.</p>
					<p>
						<a href="#" class="download-button">Download</a>
					</p>
				</div>
			</div>
		</section>
		<section class="features">
			<div class="wrap">
				<h2>Features</h2>
				<?php
					if (function_exists('sw_list_features')) {
						echo sw_list_features();
					}
				?>
			</div>
		</section>
		<section class="news-activity">
			<div class="wrap">
				<div class="news">
					<h2>News</h2>
					<?php
					if (function_exists('sw_list_news')) {
						echo sw_list_news();
					}
					?>
				</div>
				<div class="activity">
					<h2>Some activity</h2>
					<p>This section could have some interesting stuff on development or may not</p>
				</div>
			</div>
		</section>
		<section class="contribute">
			<h2>Contribute</h2>
		</section>
	</article>

<?php
	get_footer();
?>
