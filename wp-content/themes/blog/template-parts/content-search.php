<!-- Post preview-->
<div class="post-preview">
    <a href="<?php the_permalink(); ?>">
        <h2 class="post-title"><?php the_title(); ?></h2>
    </a>
    <p class="post-meta">
        Posted by
        <a href="<?php echo esc_url( __( 'https://github.com/SeenSeens', 'blog' ) ); ?>"><?php the_author() ?></a>
        on <?php the_modified_date(); ?>
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />