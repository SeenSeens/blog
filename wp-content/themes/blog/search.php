<?php
get_header();
?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('http://blog.local/wp-content/uploads/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10">
                <div class="site-heading">
                    <h1 class="page-title">
                        <?php
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Search Results for: %s', 'blog' ), '<span>' . get_search_query() . '</span>' );
                        ?>
                    </h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-8 border-end">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content', 'search' );
                    endwhile;
                    the_posts_navigation();
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php
get_footer();
