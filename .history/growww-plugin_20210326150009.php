<?php
/**
 * Plugin Name: Growww Today - Basis
 * Plugin URI: https://ModditKevin@bitbucket.org/moddit/growww-plugin
 * Description: Deze plugin bevat de basisfunctionaliteiten van de website, verwijder daarom deze plugin niet
 * Version: 1.1.1
 * Author: Kevin Brinkman
 * License: GNU General Public License v2
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * GitHub Plugin URI: https://ModditKevin@bitbucket.org/moddit/growww-plugin
 * GitHub Branch: master
 * GitHub Languages: afragen/github-updater-translations
 * Requires WP: 4.0
 * Requires PHP: 5.4
 */



    function load_custom_wp_admin_style() {
        wp_enqueue_style( 'custom_wp_admin_css', plugins_url('styles/admin.css', __FILE__) );
    }
    add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

    include( plugin_dir_path( __FILE__ ) . 'includes/resize.php');
    include( plugin_dir_path( __FILE__ ) . 'includes/dashboard.php');

    include( plugin_dir_path( __FILE__ ) . 'includes/acf.php');
    include( plugin_dir_path( __FILE__ ) . 'includes/acf-velden.php');
    include( plugin_dir_path(__FILE__). 'includes/custom/header.php');
    include( plugin_dir_path(__FILE__). 'includes/custom/footer.php');
    include( plugin_dir_path(__FILE__). 'includes/custom/branding.php');
    
