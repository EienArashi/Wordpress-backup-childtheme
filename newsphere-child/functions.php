<!-- start of PHP code -->
<?php
//the add_action and function is for making the child theme
//get the parent theme's scrips and style.
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

//add a kind greeting with elseif code
$t = date("H");

if ($t < "20") {
    echo '<span style="color:#E5CD19;">Have a good day!</span>';
} else {
    echo '<span style="color:#E5CD19;">Have a good night..!</span>';
}

//adding custom logo to override WordPress logo.
function tr_dashboard_logo() {
	echo '<style type="text/css"> #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before{color:rgba(0, 0, 0, 0); background-position: 0 0; background-image: url('.get_bloginfo('stylesheet_directory').'/images/dashboard-logo.png) !important;} #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon{background-position: 0 0;}</style>';
}
add_action('wp_before_admin_bar_render', 'tr_dashboard_logo');
?>
