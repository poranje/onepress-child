<?php
/**
 * OnePress Child Theme Functions
 *
 */

/**
 * Enqueue child theme style
 */
add_action( 'wp_enqueue_scripts', 'onepress_child_enqueue_styles', 15 );
function onepress_child_enqueue_styles() {
    wp_enqueue_style( 'onepress-child-style', get_stylesheet_directory_uri() . '/style.css' );
}

add_filter('wp_head', 'custom_onepress_site_info', 999);
function custom_onepress_site_info() {
    remove_action( 'onepress_footer_site_info', 'onepress_footer_site_info' );
    add_action( 'onepress_footer_site_info', 'custom_onepress_footer_site_info' );
}

function custom_onepress_footer_site_info() {
?>
    <?php printf(esc_html__('Copyright %1$s %2$s %3$s', 'onepress'), '&copy;', esc_attr(date('Y')), esc_attr(get_bloginfo())); ?>
    <span class="sep"> &ndash; </span>
    <?php printf(esc_html__('Webhosting door %1$s', 'onepress'), '<a href="' . esc_url('https://www.vimexx.nl?affiliate=tcbths1jy9uiowaheglk') . '">Vimexx</a>'); ?>
<?php
}
