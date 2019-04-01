<?php 

// Prevent deletion of Super Admin
define('PDDM_USER_ID', 1); // User ID of your Account

add_action('delete_user', function($id) {
    if ($id == PDDM_USER_ID) {
        die('Process failed. User cannot be deleted.');
    }
});

//Add Theme Header Customization

add_theme_support( 'custom-header' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Add theme support for NavWalker
function navWalker(){
    register_nav_menus([
        'primary' => __( 'Primary Menu', 'navwalker' ),
    ]);
}

add_action('after_setup_theme', 'navWalker');

function myCss(){
    wp_enqueue_style('bst-file', get_stylesheet_directory_uri() . '/css/bootstrap-4.0.0.css');
    wp_enqueue_style('sp-css', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('fa-file', get_stylesheet_directory_uri() . '/fa/css/all.css', array(), '5.1.0', 'all');
    wp_enqueue_style('font-file', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,600i,700,700i|Source+Sans+Pro:400,400i,600,700,700i');
}

add_action( 'wp_enqueue_scripts', 'myCss');

add_theme_support( 'post-thumbnails' );

remove_action('welcome_panel', 'wp_welcome_panel');

// Admin Widget Developer Information
add_action('wp_dashboard_setup', 'sp_dashboard_msg');
function sp_dashboard_msg() {
global $wp_meta_boxes;
wp_add_dashboard_widget('custom_help_widget', 'Theme Designer - Message', 'sp_admin_msg_text');
}
function sp_admin_msg_text() {
echo '<p>This custom theme was created by <a href="http://campbelldev.net">Aaron Campbell</a>. For assistance, use <a href="mailto:aaronwcampbell00@gmail.com" target="_blank">this email</a></p>';
}

function admin_ftr_txt(){
    echo '<i>Created by <a href="http://campbelldev.net" alt="" target="_blank" title="Aaron Campbell, Web Developer">Aaron Campbell</a>.</i>';
}

add_filter('admin_footer_text', 'admin_ftr_txt');

//Register Sidebar and Footer Widgets
function sp_sidebar($id){
    register_sidebar([
        'name' => 'Sidebar - Index',
        'id' => 'sidebar1',
        'before_widget' => '<div class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'name' => 'Footer Left',
        'id' => 'footer1',
        'before_widget' => '<div class="firstFtr">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'name' => 'Footer Middle',
        'id' => 'footer2',
        'before_widget' => '<div class="secondFtr">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'name' => 'Footer Right',
        'id' => 'footer3',
        'before_widget' => '<div class="thirdFtr">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}

add_action('widgets_init', 'sp_sidebar');

// BOOTSTRAP COMMENTS
add_filter('comment_reply_link', 'sp_reply_link_class');
function sp_reply_link_class($class){
	$class = str_replace("class='comment-reply-link", "class='comment-reply-link btn btn-light btn-xs", $class);
	return $class;
}

function sp_comment_format($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>

	<li <?php comment_class('media'); ?> id="comment-<?php comment_ID(); ?>">
        <article class="comment-meta media-body">
            <p class="align-self-start mr-3 media-heading"><?php echo get_avatar( $comment, 96 ); ?></p>
            <div class="media-body">
                <h5 class="mt-0"><?php comment_author_link(); ?> <small><i>Posted <?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . ' ago'; ?> </i></small></h5>
                <?php if ($comment->comment_approved == '0') { // Awaiting Moderation ?>
                    <em><?php _e('Your comment is awaiting moderation.') ?></em>
                <?php } ?>
                <p class="media-body"><?php comment_text(); ?></p>
                <!-- <div class="reply pull-right">
                    <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( '<i class="icon-reply"></i>&nbsp; Reply' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                </div> -->
            </div>
        </article>
    </li>
<?php } // sp_comment_format ends
?>