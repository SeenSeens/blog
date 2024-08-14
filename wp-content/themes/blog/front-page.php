<?php get_header(); ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('http://blog.local/wp-content/uploads/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container-fluid px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-8 border-end">
            <?php
            $query = new WP_Query( [
                'post_type' => 'post',
                'posts_per_page' => -1
            ]);
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();
            ?>
            <!-- Post preview-->
            <div class="post-preview">
                <a href="<?php the_permalink(); ?>">
                    <h2 class="post-title"><?php the_title(); ?></h2>
                    <h3 class="post-subtitle"><?php the_excerpt(); ?></h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="<?php echo esc_url( __( 'https://github.com/SeenSeens', 'blog' ) ); ?>"><?php the_author() ?></a>
                    on <?php the_modified_date(); ?>
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            wp_reset_query();
            ?>
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
        <?php require_once get_template_directory() . '/sidebar.php'; ?>
    </div>
</div>
<?php get_footer(); ?>