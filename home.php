
<?php get_header(); ?>

<div class="row">
	<div class="col-md-8">
	
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="row container" style="tbl table-bordered">
						<div class="row">
							<?php get_template_part( 'thumbnailformat' ); ?>
							<?php the_post()?>
							<?php get_template_part( 'thumbnailformat' ); ?>
						</div>
					</div>
	    
    			<hr>
    			
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, this page does not exist'); ?></p>
				<?php endif; ?>
	</div>
	
	
	<div class="col-md-2">
		<?php get_sidebar(); ?>
	</div>
	<div class="col-md-2">
		<?php get_sidebar('2');?>
	</div>
</div>

<?php get_footer(); ?>
