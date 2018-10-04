<?php get_header(); ?>

	<div class="row">

		<div class="col-sm-8 blog-main">

            <header class="page-header">
                <?php
                
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    
				?>
            </header>
        
            <?php

			while ( have_posts() ) : the_post();
  	
                get_template_part( 'content-blogi', get_post_format() );
                
            endwhile;
            
            if (function_exists("fellowtuts_wpbs_pagination"))
            {
                fellowtuts_wpbs_pagination();
            }
            
            ?> 

		</div> 

		<?php get_sidebar('blogi'); ?>

	</div> 

<?php get_footer(); ?>