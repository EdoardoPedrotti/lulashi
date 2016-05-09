<?php get_header();?>


<?php 
query_posts( 'post_type=work' );
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
<?php $thumbSrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');?>
<div class="row">
	<div class='col-md-10 col-md-offset-2'>
		<div class="row">
			<div class="col-md-3 col-xs-offset-1">
				<h1><a href="<?php the_permalink();?>"><?php the_title()?></a></h1>
			</div>
		</div>
		<div class="row" style="margin:0.1%:q;">
			<div class="col-md-12 col-xs-12">
				<img class="img-responsive" src="<?php echo $thumbSrc[0];?>">
			</div>
		</div>
	</div>
</div>
<?php endwhile; /* fine del loop */ ?>



<?php get_footer();?>