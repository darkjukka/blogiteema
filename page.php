<?php get_header(); ?>

	<div class="row">

		<div class="col-sm-8 blog-main">
			
			<?php 

			$image = get_field('etusivu_kuva');

			if( !empty($image) ): ?>

				<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="Responsive image" />

			<?php 
			
			endif; 
				 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
		
				get_template_part( 'content-index', get_post_format() );
	
			endwhile; endif; 
			
			?>				

		</div>

		<?php get_sidebar('index'); ?>

	</div>

<?php get_footer(); ?>