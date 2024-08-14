<div class="col-md-4">
    <!-- Post preview-->
    <div class="post-preview">
        <h5 class="">Tìm kiếm</h5>
        <?php get_search_form(); ?>
    </div>
    <!-- Divider-->
    <hr class="my-4" />
    <!-- Post preview-->
    <div class="post-preview">
        <h5 class="">Chuyên mục</h5>
        <ul class="list-group m-0">
            <?php
        $args = [
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => 1 // Ẩn các chuyên mục không có bài viết
        ];
        $categories = get_categories( $args );
        foreach ( $categories as $category ) {
            echo '<li class="list-group-item border-0"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';

        }
        ?>
        </ul>

    </div>
    <!-- Divider-->
    <hr class="my-4" />
    <!-- Post preview-->
    <div class="post-preview">
        <h5 class="">Bài viết mới nhất</h5>
        <ul class="list-group m-0">
            <?php
            $query = new WP_Query( [
                'post_type' => 'post',
                'taxonomy' => 'category',
                'posts_per_page' => 5, // Chỉ lấy 5 bài viết
                'orderby' => 'date',   // Sắp xếp theo ngày đăng
                'order' => 'DESC'       // Sắp xếp giảm dần (mới nhất trước)
            ]);
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
            ?>
                    <li class="list-group-item border-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            wp_reset_query();
            ?>
        </ul>
    </div>
    <!-- Divider-->
    <hr class="my-4" />
</div>