<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
             
    <div class="sidebar-module">

        <h3>Tuoreimmat:</h3>
        <?php

        $query = new WP_Query( array( 'posts_per_page' => 2 ) );

        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

            get_template_part( 'content-sidebarblog', get_post_format() );

        endwhile; endif; 
        ?>
    </div>
             
</div>