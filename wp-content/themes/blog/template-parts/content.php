<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog
 */

?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('http://blog.local/wp-content/uploads/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10">
                <div class="site-heading">
                    <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="">', '</h1>' );
                        else :
                            the_title( '<h2 class=""><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;
                        if ( 'post' === get_post_type() ) :
                        ?>
                        <span class="subheading">
                            <?php
                            blog_posted_on();
                            blog_posted_by();
                            ?>
                        </span>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</header>
<article id="post-<?php the_ID(); ?>" <?php post_class('mb-4'); ?>>
	<div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php
                the_content(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blog' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );
                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blog' ),
                        'after'  => '</div>',
                    )
                );
                ?>
                <footer class="entry-footer">
                    <?php blog_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </div>
        </div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
