<div class="blog-post">
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <p class="blog-post-meta"><?php echo get_the_date(); ?> <?php the_time(); ?> <?php the_category(', ' ); ?></p>

    <?php the_content(); ?>

    <?php the_tags( '<div class="blog-tags-single"><p>Tagit:</p> <button type="button" class="btn btn-primary">', '</button><button type="button" class="btn btn-primary">', '</button></div>' ); ?>
    <div class="other-blog-posts">
        <div class="previous-blog-post">
            <?php previous_post_link('%link', '<< Edellinen postaus'); ?>
        </div>
        <div class="next-blog-post">
            <?php next_post_link('%link', 'Seuraava postaus >>'); ?>
        </div>
    </div>
</div>