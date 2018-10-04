<div class="blog-post">
	<h2 class="blog-post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta"><?php echo get_the_date(); ?> <?php the_time(); ?>  <?php the_category(', ' ); ?> </p>

	<?php the_excerpt(); ?>

	<?php the_tags( '<div class="blog-tags"><p>Tagit:</p> <button type="button" class="btn btn-primary">', '</button><button type="button" class="btn btn-primary">', '</button></div>' ); ?>

</div>