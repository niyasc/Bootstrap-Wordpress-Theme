
<?php get_header(); ?>

<div class="row">

	<div class="col-md-8">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
    	<p><?php the_content?></p>
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
