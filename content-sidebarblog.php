<div class="sidebar-blog-post">
    <h4 class="sidebar-blog-post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
    <p class="sidebar-blog-post-meta"><?php echo get_the_date(); ?> <?php the_time(); ?>  <?php the_category(', ' ); ?></p>

    <?php the_excerpt(); ?>

</div>