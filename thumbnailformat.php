<div class="col-md-4">
	<div class="col-xs-6 col-md-3"><!-- container for image -->
		<?php
			echo "<div style='background-color: #eeeeee; border-radius: 4px; padding: 4px; height: 102px; width: 216px'>";
				if (has_post_thumbnail()) {
					$url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'fullsize');
					add_image_size('thumb', 216, 102);
					echo "<img src='".$url[0]."' style='height: 100%; width: 100%'>";
				}
				else {
					echo "<img src='wp-content/themes/TechnoRevolution3/bootstrap/img/noimg.png' style='height: 100%; width: 100%'>";
				}
			echo "</div>";
		?>
	</div>
	<?php the_title();?>
</div>
					
