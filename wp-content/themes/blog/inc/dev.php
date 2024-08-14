<?php
/**
 * css & js
 */
function dev_scripts(): void{
	wp_enqueue_style( 'blog-styles', get_template_directory_uri() . '/assets/css/styles.css', [], '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'dev_scripts' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(): void{
    require_once get_template_directory() . '/inc/bootstrap_5_wp_nav_menu_walker.php';
//    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Disable block widget
 */
function widget_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'widget_theme_support' );

/**
 * Remove "Category:", "Tag:", "Author:" from the_archive_title
 */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});