<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog
 */

?>
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="<?php echo esc_url( __( 'https://github.com/SeenSeens', 'blog' ) ); ?>" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php echo esc_url( __( 'https://www.facebook.com/tuan.seen.it', 'blog' ) ); ?>" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php echo esc_url( __( 'https://github.com/SeenSeens', 'blog' ) ); ?>" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="small text-center text-muted fst-italic">
                        <?php
                            /* translators: 1: Theme name, 2: Theme author. */
                            printf( esc_html__( 'Theme: %1$s by %2$s.', 'blog' ), 'blog', '<a href="https://www.linkedin.com/in/tuanseenit/">Trương Tuấn</a>' );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!--</div>-->

<?php wp_footer(); ?>

</body>
</html>
