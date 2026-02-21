<?php
/*
Plugin Name:        MLAbram - Enhanced Floating Admin Bar
Plugin URI:         https://mlabram.com
Description:        Enhance the default WordPress floating admin bar with quick-access shortcuts.
Version:            1.1.0
Requires At Least:  5.0
Requires PHP:       7.0
Author:             MLAbram
Author URI:         https://mlabram.com
License:            GNU General Public License v3
License URI:        https://www.gnu.org/licenses/gpl-3.0.html
Text Domain:        mlabram-enhanced-floating-admin-bar
Domain Path:        /languages
Network:            true
Update URI:         mlabram-enhanced-floating-admin-bar
*/

// Prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Adds "Posts" and "Pages" shortcuts to the "Site Name" menu in the Admin Bar.
 *
 * @param WP_Admin_Bar $admin_bar The Unified Admin Bar object.
 */
function mlabram_enhanced_floating_admin_bar_add_nodes( $admin_bar ) {
    
    // Only show these links to users who have permission to edit content
    if ( ! current_user_can( 'edit_posts' ) ) {
        return;
    }

    // Add 'Posts' link
    $admin_bar->add_node( array(
        'parent' => 'site-name',
        'id'     => 'mlabram-posts',
        'title'  => __( 'Posts', 'mlabram-enhanced-floating-admin-bar' ),
        'href'   => admin_url( 'edit.php' ),
        'meta'   => array( 'title' => __( 'Manage Posts', 'mlabram-enhanced-floating-admin-bar' ) )
    ) );

    // Add 'Pages' link
    $admin_bar->add_node( array(
        'parent' => 'site-name',
        'id'     => 'mlabram-pages',
        'title'  => __( 'Pages', 'mlabram-enhanced-floating-admin-bar' ),
        'href'   => admin_url( 'edit.php?post_type=page' ),
        'meta'   => array( 'title' => __( 'Manage Pages', 'mlabram-enhanced-floating-admin-bar' ) )
    ) );
}

// Hook into admin_bar_menu with a high priority to ensure it appears after standard items
add_action( 'admin_bar_menu', 'mlabram_enhanced_floating_admin_bar_add_nodes', 999 );