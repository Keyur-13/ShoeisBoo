<?php

/*
Plugin Name: WP Meta and Date Remover
Plugin URI: mailto:prasadkirpekar@outlook.com
Description: Remove Meta information such as Author and Date from posts and pages.
Version: 1.9.4
Author: Prasad Kirpekar
Author URI: http://twitter.com/kirpekarprasad
License: GPL v2
Copyright: Prasad Kirpekar

	This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( !function_exists( 'wmadr_fs' ) ) {
    // Create a helper function for easy SDK access.
    function wmadr_fs()
    {
        global  $wmadr_fs ;
        
        if ( !isset( $wmadr_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $wmadr_fs = fs_dynamic_init( array(
                'id'              => '6753',
                'slug'            => 'wp-meta-and-date-remover',
                'type'            => 'plugin',
                'public_key'      => 'pk_6bc68a469d4ab171bcc3dc4717f42',
                'is_premium'      => false,
                'premium_suffix'  => 'Pro',
                'has_addons'      => false,
                'has_paid_plans'  => true,
                'has_affiliation' => 'selected',
                'menu'            => array(
                'slug'    => 'wp-meta-and-date-remover.php',
                'support' => false,
                'parent'  => array(
                'slug' => 'options-general.php',
            ),
            ),
                'is_live'         => true,
            ) );
        }
        
        return $wmadr_fs;
    }
    
    // Init Freemius.
    wmadr_fs();
    // Signal that SDK was initiated.
    do_action( 'wmadr_fs_loaded' );
}

function wpmdr_extra_links( $links )
{
    $donate = "<a href='http://bit.ly/PKDonate'>Support Development</a>";
    $fiverr = "<a href='https://bit.ly/WPFiverr'>More Customization</a>";
    $setting_link = '<a href="../wp-admin/options-general.php?page=wp-meta-and-date-remover.php">Settings</a>';
    array_unshift( $links, $setting_link );
    array_unshift( $links, $fiverr );
    array_unshift( $links, $donate );
    return $links;
}

$plugin = plugin_basename( __FILE__ );
function wpmdr_reg_scripts()
{
}

function wpmdr_enqueue_scripts()
{
    wp_enqueue_style( 'wpmdr_md_style2', plugin_dir_url( __FILE__ ) . 'admin/css/tailwind.min.css' );
    wp_enqueue_style( 'wpmdr_css', plugin_dir_url( __FILE__ ) . 'admin/css/wpmdr.css' );
}

add_action( 'admin_init', 'wpmdr_reg_scripts' );
//Removal using css
function wpmdr_inline_style()
{
    if ( get_option( 'wpmdr_disable_css' ) == "0" ) {
        echo  "<style>/* CSS added by WP Meta and Date Remover*/" . get_option( 'wpmdr_css' ) . "</style>" ;
    }
}

function wpmdr_settings()
{
    
    if ( isset( $_POST['submitted'] ) && check_admin_referer( 'acc_nonce_wpmdr', 'acc_nonce_field_wpmdr' ) ) {
        $css = get_option( 'wpmdr_css' );
        $disable_php = get_option( 'wpmdr_disable_php' );
        $disable_css = get_option( 'wpmdr_disable_css' );
        $from_ = get_option( 'wpmdr_from_' );
        if ( isset( $_POST['wpmdr_from_home'] ) ) {
            $from_['home'] = $_POST['wpmdr_from_home'];
        }
        $css = $_POST['wpmdr_css'];
        if ( isset( $_POST['wpmdr_disable_php'] ) ) {
            $disable_php = $_POST['wpmdr_disable_php'];
        }
        if ( isset( $_POST['wpmdr_disable_css'] ) ) {
            $disable_css = $_POST['wpmdr_disable_css'];
        }
        update_option( 'wpmdr_css', $css );
        update_option( 'wpmdr_disable_php', $disable_php );
        update_option( 'wpmdr_disable_css', $disable_css );
        update_option( 'wpmdr_from_', $from_ );
        echo  '<div class="updated fade"><p>Primary Settings Saved! </p></div>' ;
    }
    
    if ( isset( $_POST['submitted_pro'] ) && check_admin_referer( 'acc_nonce_wpmdr_pro', 'acc_nonce_field_wpmdr' ) ) {
    }
    if ( isset( $_POST['submitted_custom'] ) && check_admin_referer( 'wpmdr_custom_setting', 'wpmdr_custom_setting' ) ) {
        wpmdr_update_custom_options();
    }
    if ( isset( $_POST['submitted_content'] ) && check_admin_referer( 'wpmdr_content_setting', 'wpmdr_content_setting' ) ) {
        wpmdr_update_content_options();
    }
    
    if ( isset( $_POST['install_ssl'] ) && check_admin_referer( 'acc_nonce_install_ssl', 'acc_nonce_field_wpmdr' ) ) {
        require 'admin/plugin_install.php';
        wpmdr_replace_plugin();
    }
    
    $action_url = $_SERVER['REQUEST_URI'];
    include "admin/admin.php";
}

function wpmdr_custom_hide()
{
    if ( get_option( 'wpmdr_custom_hide', "1" ) == "1" ) {
        return false;
    }
    return true;
}

function wpmdr_update_custom_options()
{
    $custom_hide = get_option( 'wpmdr_custom_hide', "1" );
    if ( isset( $_POST['wpmdr_custom_hide'] ) ) {
        $custom_hide = $_POST['wpmdr_custom_hide'];
    }
    update_option( 'wpmdr_custom_hide', $custom_hide );
    echo  '<div class="updated fade"><p>Custom Settings Saved! </p></div>' ;
}

function wpmdr_update_content_options()
{
    //var_dump($_POST);
    $remove_date = get_option( 'wpmdr_remove_date', "1" );
    $remove_author = get_option( 'wpmdr_remove_author', "1" );
    if ( isset( $_POST['wpmdr_remove_date'] ) ) {
        $remove_date = $_POST['wpmdr_remove_date'];
    }
    if ( isset( $_POST['wpmdr_remove_author'] ) ) {
        $remove_author = $_POST['wpmdr_remove_author'];
    }
    update_option( 'wpmdr_remove_date', $remove_date );
    update_option( 'wpmdr_remove_author', $remove_author );
    echo  '<div class="updated fade"><p>Content Settings Saved! </p></div>' ;
}

function wpmdr_admin_settings()
{
    $page = add_options_page(
        'WP Meta and Date Remover',
        'WP Meta and Date Remover',
        'manage_options',
        basename( __FILE__ ),
        'wpmdr_settings'
    );
    add_action( 'admin_print_scripts-' . $page, 'wpmdr_enqueue_scripts' );
}

function wpmdr_init_option()
{
    $css = ".entry-meta {display:none !important;}\r\n\t.home .entry-meta { display: none; }\r\n\t.entry-footer {display:none !important;}\r\n\t.home .entry-footer { display: none; }";
    if ( !add_option( 'wpmdr_from_', array(
        'home'        => '1',
        'help_notice' => '0',
    ) ) ) {
        update_option( 'wpmdr_from_', array(
            'home'        => '1',
            'help_notice' => '0',
        ) );
    }
    add_option( 'wpmdr_css', $css );
    add_option( 'wpmdr_disable_php', "0" );
    add_option( 'wpmdr_disable_css', "0" );
    add_action( 'admin_notices', 'wpmdr_notice' );
    add_option( 'wpmdr_individual_post', "0" );
    add_option( 'wpmdr_individual_post_default', 1 );
    add_option( 'wpmdr_included_post_types', [ 'post' ] );
    add_option( 'wpmdr_excluded_categories', [] );
    add_option( 'wpmdr_post_age', -1 );
    add_option( 'wpmdr_remove_date', "1" );
    add_option( 'wpmdr_remove_author', "1" );
    update_option( 'wpmdr_debug_info', "0" );
}

function wpmder_post_checkboxes()
{
    add_meta_box(
        'wpmder_post_checkboxes',
        // this is HTML id of the box on edit screen
        'WP Meta and Date Remover',
        // title of the box
        'wpmdr_menu',
        // function to be called to display the checkboxes, see the function below
        get_option( 'wpmdr_included_post_types', [ 'post' ] ),
        // on which edit screen the box should appear
        'side',
        // part of page where the box should appear
        'default'
    );
}

function wpmdr_menu()
{
    global  $post ;
    /* check if this is a post, if not then we won't add the custom field */
    /* change this post type to any type you want to add the custom field to */
    if ( !in_array( get_post_type( $post ), get_option( 'wpmdr_included_post_types', [ 'post' ] ) ) ) {
        return false;
    }
    /* get the value corrent value of the custom field */
    $value = get_post_meta( $post->ID, 'wpmdr_menu', true );
    
    if ( empty($value) ) {
        add_post_meta(
            $post->ID,
            'wpmdr_menu',
            1,
            true
        );
        $value = 1;
    }
    
    ?>
        <div class="misc-pub-section">
            <label><input type="checkbox"<?php 
    echo  ( $value == 1 ? ' checked="checked"' : null ) ;
    ?> value="1" name="wpmdr_menu" /> Remove Meta and Date</label>
        </div>
    <?php 
}

function wpmdr_save_postdata( $postid )
{
    $value = get_post_meta( $postid, 'wpmdr_menu', true );
    
    if ( empty($value) ) {
        $value = get_option( 'wpmdr_individual_post_default', 1 );
        add_post_meta(
            $postid,
            'wpmdr_menu',
            $value,
            true
        );
        return;
    }
    
    
    if ( isset( $_POST['wpmdr_menu'] ) ) {
        update_post_meta( $postid, 'wpmdr_menu', 1 );
    } else {
        update_post_meta( $postid, 'wpmdr_menu', 2 );
    }

}


if ( get_option( 'wpmdr_individual_post' ) == 1 ) {
    add_action( 'add_meta_boxes', 'wpmder_post_checkboxes' );
    add_action( 'save_post', 'wpmdr_save_postdata' );
}

function wpmdr_yoastseo_filter()
{
}

function wpmdr_yoast_modify_schema_graph_pieces( $data )
{
    return $data;
}

function wpmdr_php_filter_option()
{
    $from_ = get_option( 'wpmdr_from_' );
    
    if ( is_home() || is_front_page() ) {
        
        if ( $from_['home'] == "1" ) {
            wpmdr_remove_meta_php();
        } else {
            return;
        }
    
    } else {
        global  $post ;
        if ( is_null( $post ) ) {
            return;
        }
        $value = get_post_meta( $post->ID, 'wpmdr_menu', true );
        
        if ( empty($value) ) {
            add_post_meta(
                $post->ID,
                'wpmdr_menu',
                1,
                true
            );
            $value = 1;
        }
        
        
        if ( in_array( get_post_type( $post ), get_option( 'wpmdr_included_post_types', [ 'post' ] ) ) ) {
            
            if ( get_post_meta( $post->ID, 'wpmdr_menu', true ) != 1 && get_option( 'wpmdr_individual_post' ) == "1" ) {
                wpmdr_debug( "Individual post setting excludes this post" );
                return;
            } else {
                wpmdr_debug( "Applied PHP filter" );
                wpmdr_remove_meta_php();
            }
        
        } else {
            wpmdr_debug( "Excluded in post type" );
        }
        
        return;
    }

}

function wpmdr_debug( $msg )
{
    if ( wmadr_fs()->is_not_paying() ) {
        return;
    }
    $is_debug = get_option( 'wpmdr_debug_info', "0" );
    if ( current_user_can( 'manage_options' ) && $is_debug == "1" ) {
        echo  "<span style='padding:5px;background:black;color:#fff'>{$msg}(Debug mode in WP Meta and Date Remover)</span><br>" ;
    }
}

function wpmdr_css_filter_option()
{
    $from_ = get_option( 'wpmdr_from_' );
    
    if ( is_home() || is_front_page() ) {
        
        if ( $from_['home'] == "1" ) {
            wpmdr_inline_style();
        } else {
            return;
        }
    
    } else {
        global  $post ;
        if ( is_null( $post ) ) {
            return;
        }
        $value = get_post_meta( $post->ID, 'wpmdr_menu', true );
        
        if ( empty($value) ) {
            add_post_meta(
                $post->ID,
                'wpmdr_menu',
                1,
                true
            );
            $value = 1;
        }
        
        if ( in_array( get_post_type( $post ), get_option( 'wpmdr_included_post_types', [ 'post' ] ) ) ) {
            
            if ( get_post_meta( $post->ID, 'wpmdr_menu', true ) != 1 && get_option( 'wpmdr_individual_post' ) == "1" ) {
                return;
            } else {
                //wpmdr_debug("Applied CSS filter");
                wpmdr_inline_style();
            }
        
        }
        return;
    }

}

function wpmdr_notice()
{
    $from_ = get_option( 'wpmdr_from_' );
    
    if ( $from_['help_notice'] == "0" ) {
        echo  '
    <div class="notice notice-success is-dismissible">
        <p>Thank you for Installing WP Meta and Date Remover. Read this post see <a href="http://bit.ly/wpmdrplugin" target="_blank"><b>how to configure this plugin.</b></a><br/>
		You may support development of this plugin by donating tiny amount <a href="http://bit.ly/PKDonate" target="_blank"><b>here</b></a>.
		</p>
		
    </div>' ;
        $from_['help_notice'] = "1";
        update_option( 'wpmdr_from_', $from_ );
    }

}

add_action( 'admin_notices', 'wpmdr_notice' );
// removal using php.
//some times css removal don't work for every theme.
function wpmdr_remove_meta_php()
{
    
    if ( get_option( 'wpmdr_disable_php' ) == "0" ) {
        
        if ( get_option( 'wpmdr_remove_date', "1" ) == "1" ) {
            add_filter( 'the_date', '__return_false' );
            add_filter( 'the_time', '__return_false' );
            add_filter( 'the_modified_date', '__return_false' );
            add_filter( 'get_the_date', '__return_false' );
            add_filter( 'get_the_title', '__return_false' );
            add_filter( 'get_the_time', '__return_false' );
            add_filter( 'get_the_modified_date', '__return_false' );
        }
        
        
        if ( get_option( 'wpmdr_remove_author', "1" ) == "1" ) {
            add_filter( 'the_author', '__return_false' );
            add_filter( 'get_the_author', '__return_false' );
            add_filter( 'get_the_author_display_name', '__return_false' );
        }
    
    }

}

//do everything
register_activation_hook( __FILE__, 'wpmdr_init_option' );
add_action( 'wp_head', 'wpmdr_css_filter_option' );
add_filter( "plugin_action_links_{$plugin}", 'wpmdr_extra_links' );
add_action( 'loop_start', 'wpmdr_php_filter_option' );
add_action( 'admin_menu', 'wpmdr_admin_settings' );