<?php get_header(); ?>

	<div class="row">

		<div class="col-sm-8 blog-main">
            
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
                'post_type'        => 'post',
                'paged'          => $paged
            );

            $query = new WP_Query( $args ); 
            
			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
  	
                get_template_part( 'content-blogi', get_post_format() );
                
            endwhile; endif;

            if (function_exists("fellowtuts_wpbs_pagination"))
            {
                fellowtuts_wpbs_pagination($query->max_num_pages);
            }
            ?> 

		</div>

		<?php get_sidebar('blogi'); ?>

	</div>

<?php get_footer(); ?>